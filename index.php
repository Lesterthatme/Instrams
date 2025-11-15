<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASC Sports and Development</title>
    <link rel="stylesheet" href="./assets/css/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <nav class="bg-gradient-to-r from-amber-50 to-amber-100 px-[5%] py-3 shadow-lg sticky top-0 z-10">
        <div class="w-full flex justify-between items-center">
            <div class="flex items-center justify-center font-bold gap-3">
                <div class="relative">
                    <img class="h-11 w-11 sm:h-14 sm:w-14 rounded-full border-2 border-amber-300 shadow-sm" src="./assets/img/BASC_sports_development_office.png" alt="BASC_sports_development_office_LOGO">
                </div>
                <h1 class="titles title hidden sm:block"><a href="#">BASC Sports Development Office</a></h1>
                <h1 class="titles title sm:hidden"><a href="">BASC Sports</a></h1>
            </div>
            <div class="hidden sm:block">
                <ul class="flex space-x-7 lg:space-x-10">
                    <li class="hover-nav"><a href="./pages/schedule.php" class="flex items-center gap-2"><i class="fas fa-calendar-alt text-sm"></i> Schedule</a></li>
                    <li class="hover-nav"><a href="#" class="flex items-center gap-2"><i class="fas fa-trophy text-sm"></i> Results</a></li>
                    <li class="hover-nav"><a href="#" class="flex items-center gap-2"><i class="fas fa-users text-sm"></i> Teams</a></li>
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
                <li><a href="./pages/schedule.php" class="block px-4 py-2 hover-nav hover:bg-amber-50 nav-text"><i class="fas fa-calendar-alt mr-3"></i>Schedule</a></li>
                <li><a href="#" class="block px-4 py-2 hover-nav hover:bg-amber-50 nav-text"><i class="fas fa-trophy mr-3"></i>Results</a></li>
                <li><a href="#" class="block px-4 py-2 hover-nav hover:bg-amber-50 nav-text"><i class="fas fa-users mr-3"></i>Teams</a></li>
            </ul>
        </div>
    </nav>

    <div class="md:px-[8%] sm:px-[5%] px-[3%] min-h-screen py-6">
        <div class="sm:hidden block">
            <div class="flex items-center justify-center mb-1">
                <div class="flex items-center justify-center h-40 w-100"><img src="./assets/img/BSAU_Sportsfest.svg" alt="BSAU_Sportsfest"></div>
            </div>
        </div>

        <div class="py-3 flex flex-col md:flex-row justify-between items-start md:items-center mb-6 bg-gradient-to-r from-white to-amber-50 rounded-2xl p-5 shadow-sm border border-amber-100">
            <div class="flex flex-col items-start mb-4 md:mb-0">
                <div class="flex items-center justify-center gap-2 mb-1">
                    <h1 class="text-gray-800 text-2xl xs:text-3xl font-bold tracking-tight">BSAU Sportsfest 2025</h1>
                </div>
                <span class="text-amber-700 text-sm xs:text-xl font-medium mt-1 bg-amber-100 px-3 py-1 rounded-full">Medal Table</span>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto">
                <div class="relative">
                    <input type="text" placeholder="Search institute..." class="pl-10 pr-4 py-2.5 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent w-full text-sm xs:text-base shadow-sm">
                    <i class="fas fa-search absolute left-3 top-3.5 text-gray-400"></i>
                </div>
                <select class="px-4 py-2.5 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent w-full md:w-auto text-sm xs:text-base shadow-sm bg-white">
                    <option>All Sports</option>
                    <option>Arnis</option>
                    <option>Badminton</option>
                    <option>Basketball</option>
                    <option>Beach Volleyball</option>
                    <option>Chess</option>
                    <option>Lawn Tennis</option>
                    <option>Mobile Legends</option>
                    <option>Sepak Takraw</option>
                    <option>Taekwondo</option>
                    <option>Volleyball</option>
                    <option>Table Tennis</option>
                </select>
            </div>
        </div>
        
        <section class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gradient-to-r from-amber-50 to-amber-100">
                        <tr>
                            <th class="py-4 px-4 xs:px-6 text-left font-bold text-gray-700 text-sm xs:text-base">Rank</th>
                            <th class="py-4 px-4 xs:px-6 text-left font-bold text-gray-700 text-sm xs:text-base">Institute</th>
                            <th class="py-4 px-4 xs:px-6 text-center font-bold text-gray-700 text-sm xs:text-base">
                                <div class="flex items-center justify-center">
                                    <i class="fas fa-medal text-yellow-500 mr-2"></i>
                                    <span class="xs:inline">Gold</span>
                                </div>
                            </th>
                            <th class="py-4 px-4 xs:px-6 text-center font-bold text-gray-700 text-sm xs:text-base">
                                <div class="flex items-center justify-center">
                                    <i class="fas fa-medal text-gray-400 mr-2"></i>
                                    <span class="xs:inline">Silver</span>
                                </div>
                            </th>
                            <th class="py-4 px-4 xs:px-6 text-center font-bold text-gray-700 text-sm xs:text-base">
                                <div class="flex items-center justify-center">
                                    <i class="fas fa-medal text-amber-700 mr-2"></i>
                                    <span class="xs:inline">Bronze</span>
                                </div>
                            </th>
                            <th class="py-4 px-4 xs:px-6 text-center font-bold text-gray-700 text-sm xs:text-base">Total</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr class="hover:bg-amber-50 transition duration-150 CA group">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="bg-gradient-to-br from-yellow-500 to-yellow-600 text-white rounded-full h-7 w-7 xs:h-8 xs:w-8 flex items-center justify-center font-bold text-sm xs:text-base shadow-sm group-hover:scale-110 transition duration-200">1</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <img class="h-9 w-9 xs:h-10 xs:w-10 rounded-full mr-3 xs:mr-4 border-2 border-white shadow" src="./assets/img/CA_Logo.svg" alt="CA_Logo">
                                    <span class="font-medium text-sm xs:text-base hidden sm:block">College of Agriculture</span>
                                    <span class="font-medium text-sm xs:text-base sm:hidden">CA</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-yellow-600 text-sm xs:text-base">36</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-500 text-sm xs:text-base">57</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-amber-700 text-sm xs:text-base">40</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-800 text-sm xs:text-base">133</td>
                        </tr>
                        
                        <tr class="hover:bg-amber-50 transition duration-150 COED group">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="bg-gradient-to-br from-gray-400 to-gray-500 text-white rounded-full h-7 w-7 xs:h-8 xs:w-8 flex items-center justify-center font-bold text-sm xs:text-base shadow-sm group-hover:scale-110 transition duration-200">2</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <img class="h-9 w-9 xs:h-10 xs:w-10 rounded-full mr-3 xs:mr-4 border-2 border-white shadow" src="./assets/img/COED_Logo.svg" alt="COED_Logo">
                                    <span class="font-medium text-sm xs:text-base hidden sm:block">College of Education</span>
                                    <span class="font-medium text-sm xs:text-base sm:hidden">COED</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-yellow-600 text-sm xs:text-base">28</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-500 text-sm xs:text-base">42</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-amber-700 text-sm xs:text-base">35</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-800 text-sm xs:text-base">105</td>
                        </tr>
                        
                        <tr class="hover:bg-amber-50 transition duration-150 CET group">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="bg-gradient-to-br from-amber-700 to-amber-800 text-white rounded-full h-7 w-7 xs:h-8 xs:w-8 flex items-center justify-center font-bold text-sm xs:text-base shadow-sm group-hover:scale-110 transition duration-200">3</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <img class="h-9 w-9 xs:h-10 xs:w-10 rounded-full mr-3 xs:mr-4 border-2 border-white shadow" src="./assets/img/CET_Logo.svg" alt="CET_Logo">
                                    <span class="font-medium text-sm xs:text-base hidden sm:block">College of Engineering and Technology</span>
                                    <span class="font-medium text-sm xs:text-base sm:hidden">CET</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-yellow-600 text-sm xs:text-base">25</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-500 text-sm xs:text-base">38</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-amber-700 text-sm xs:text-base">42</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-800 text-sm xs:text-base">105</td>
                        </tr>
                        
                        <tr class="hover:bg-amber-50 transition duration-150 CM group">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="bg-gradient-to-br from-gray-200 to-gray-300 text-gray-700 rounded-full h-7 w-7 xs:h-8 xs:w-8 flex items-center justify-center font-bold text-sm xs:text-base shadow-sm">4</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <img class="h-9 w-9 xs:h-10 xs:w-10 rounded-full mr-3 xs:mr-4 border-2 border-white shadow" src="./assets/img/CM_Logo.svg" alt="CM_Logo">
                                    <span class="font-medium text-sm xs:text-base hidden sm:block">College of Management</span>
                                    <span class="font-medium text-sm xs:text-base sm:hidden">CM</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-yellow-600 text-sm xs:text-base">22</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-500 text-sm xs:text-base">30</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-amber-700 text-sm xs:text-base">28</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-800 text-sm xs:text-base">80</td>
                        </tr>
                        
                        <tr class="hover:bg-amber-50 transition duration-150 DRT group">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="bg-gradient-to-br from-gray-200 to-gray-300 text-gray-700 rounded-full h-7 w-7 xs:h-8 xs:w-8 flex items-center justify-center font-bold text-sm xs:text-base shadow-sm">5</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <img class="h-9 w-9 xs:h-10 xs:w-10 rounded-full mr-3 xs:mr-4 border-2 border-white shadow" src="./assets/img/DRT_Logo.svg" alt="DRT_Logo">
                                    <span class="font-medium text-sm xs:text-base hidden sm:block">DRT Campus</span>
                                    <span class="font-medium text-sm xs:text-base sm:hidden">DRT</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-yellow-600 text-sm xs:text-base">18</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-500 text-sm xs:text-base">25</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-amber-700 text-sm xs:text-base">32</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-800 text-sm xs:text-base">75</td>
                        </tr>

                        <tr class="hover:bg-amber-50 transition duration-150 BTVC group">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="bg-gradient-to-br from-gray-200 to-gray-300 text-gray-700 rounded-full h-7 w-7 xs:h-8 xs:w-8 flex items-center justify-center font-bold text-sm xs:text-base shadow-sm">5</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <img class="h-9 w-9 xs:h-10 xs:w-10 rounded-full mr-3 xs:mr-4 border-2 border-white shadow" src="./assets/img/BTVC_Logo.svg" alt="BTVC_Logo">
                                    <span class="font-medium text-sm xs:text-base hidden sm:block">Balagtas Technical Vocational College</span>
                                    <span class="font-medium text-sm xs:text-base sm:hidden">BTVC</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-yellow-600 text-sm xs:text-base">18</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-500 text-sm xs:text-base">25</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-amber-700 text-sm xs:text-base">32</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-800 text-sm xs:text-base">75</td>
                        </tr>

                        <tr class="hover:bg-amber-50 transition duration-150 FFHNAS group">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="bg-gradient-to-br from-gray-200 to-gray-300 text-gray-700 rounded-full h-7 w-7 xs:h-8 xs:w-8 flex items-center justify-center font-bold text-sm xs:text-base shadow-sm">5</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <img class="h-9 w-9 xs:h-10 xs:w-10 rounded-full mr-3 xs:mr-4 border-2 border-white shadow" src="./assets/img/FFHNAS_Logo.svg" alt="FFHNAS_Logo">
                                    <span class="font-medium text-sm xs:text-base hidden sm:block">Fortunato F. Halili National Agricultural School</span>
                                    <span class="font-medium text-sm xs:text-base sm:hidden">FFHNAS</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-yellow-600 text-sm xs:text-base">18</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-500 text-sm xs:text-base">25</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-amber-700 text-sm xs:text-base">32</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-800 text-sm xs:text-base">75</td>
                        </tr>

                        <tr class="hover:bg-amber-50 transition duration-150 IAS group">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="bg-gradient-to-br from-gray-200 to-gray-300 text-gray-700 rounded-full h-7 w-7 xs:h-8 xs:w-8 flex items-center justify-center font-bold text-sm xs:text-base shadow-sm">5</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <img class="h-9 w-9 xs:h-10 xs:w-10 rounded-full mr-3 xs:mr-4 border-2 border-white shadow" src="./assets/img/IAS_Logo.svg" alt="IAS_Logo">
                                    <span class="font-medium text-sm xs:text-base hidden sm:block">Institute of Arts and Sciences</span>
                                    <span class="font-medium text-sm xs:text-base sm:hidden">IAS</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-yellow-600 text-sm xs:text-base">18</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-500 text-sm xs:text-base">25</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-amber-700 text-sm xs:text-base">32</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-800 text-sm xs:text-base">75</td>
                        </tr>

                        <tr class="hover:bg-amber-50 transition duration-150 ICS group">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="bg-gradient-to-br from-gray-200 to-gray-300 text-gray-700 rounded-full h-7 w-7 xs:h-8 xs:w-8 flex items-center justify-center font-bold text-sm xs:text-base shadow-sm">5</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <img class="h-9 w-9 xs:h-10 xs:w-10 rounded-full mr-3 xs:mr-4 border-2 border-white shadow" src="./assets/img/ICS_Logo.svg" alt="ICS_Logo">
                                    <span class="font-medium text-sm xs:text-base hidden sm:block">Institute of Computer Studies</span>
                                    <span class="font-medium text-sm xs:text-base sm:hidden">ICS</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-yellow-600 text-sm xs:text-base">18</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-500 text-sm xs:text-base">25</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-amber-700 text-sm xs:text-base">32</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-800 text-sm xs:text-base">75</td>
                        </tr>

                        <tr class="hover:bg-amber-50 transition duration-150 IVM group">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="bg-gradient-to-br from-gray-200 to-gray-300 text-gray-700 rounded-full h-7 w-7 xs:h-8 xs:w-8 flex items-center justify-center font-bold text-sm xs:text-base shadow-sm">5</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <img class="h-9 w-9 xs:h-10 xs:w-10 rounded-full mr-3 xs:mr-4 border-2 border-white shadow" src="./assets/img/IVM_Logo.svg" alt="IVM_Logo">
                                    <span class="font-medium text-sm xs:text-base hidden sm:block">Institute of Veterenary Medicine</span>
                                    <span class="font-medium text-sm xs:text-base sm:hidden">IVM</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-yellow-600 text-sm xs:text-base">18</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-500 text-sm xs:text-base">25</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-amber-700 text-sm xs:text-base">32</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-800 text-sm xs:text-base">75</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="bg-gradient-to-br from-white to-amber-50 p-5 rounded-2xl shadow-md border border-amber-100 hover:shadow-lg transition duration-300">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-bold text-gray-800">Top Performing Institute</h3>
                    <div class="h-8 w-8 rounded-full bg-gradient-to-r from-amber-500 to-amber-700 flex items-center justify-center">
                        <i class="fas fa-trophy text-white text-sm"></i>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="relative">
                        <img class="h-14 w-14 rounded-full mr-4 border-2 border-amber-300 shadow" src="./assets/img/CA_Logo.svg" alt="CA_Logo">
                    </div>
                    <div>
                        <h4 class="font-bold text-lg">College of Agriculture</h4>
                        <p class="text-amber-700 font-medium">133 Total Medals</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-white to-amber-50 p-5 rounded-2xl shadow-md border border-amber-100 hover:shadow-lg transition duration-300">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-bold text-gray-800">Most Gold Medals</h3>
                    <div class="h-8 w-8 rounded-full bg-gradient-to-r from-yellow-500 to-yellow-600 flex items-center justify-center">
                        <i class="fas fa-medal text-white text-sm"></i>
                    </div>
                </div>
                <div class="flex items-center">
                    <img class="h-14 w-14 rounded-full mr-4 border-2 border-amber-300 shadow" src="./assets/img/CA_Logo.svg" alt="CA_Logo">
                    <div>
                        <h4 class="font-bold text-lg">College of Agriculture</h4>
                        <p class="text-amber-700 font-medium">36 Gold Medals</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="bg-gradient-to-r from-amber-50 to-amber-100 border-t border-amber-200 py-6 px-[5%] mt-12">
        <div class="flex flex-col sm:flex-row justify-between items-center">
            <div class="flex sm:flex-row flex-col items-center mb-4 md:mb-0">
                <div class="flex flex-row sm:gap-0 gap-1 mb-1 sm:mb-0">
                    <img class="h-10 w-10 mr-0 sm:mr-2 rounded-full border border-amber-300" src="./assets/img/BASC_sports_development_office.png" alt="BASC_sports_development_office_LOGO">
                    <img class="h-10 w-10 mr-0 sm:mr-3 rounded-full border border-amber-300" src="./assets/img/BASC_Logo.svg" alt="BASC_LOGO">
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

    <script src="./assets/js/menu.js"></script>
</body>
</html>