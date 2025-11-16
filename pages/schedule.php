<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule - BASC Sports and Development</title>
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
                    <li class="hover-nav active-nav"><a href="./schedule.php" class="flex items-center gap-2"><i class="fas fa-calendar-alt text-sm"></i> Schedule</a></li>
                    <li class="hover-nav"><a href="./results.php" class="flex items-center gap-2"><i class="fas fa-trophy text-sm"></i> Results</a></li>
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
                <li><a href="./schedule.php" class="block px-4 py-2 hover-nav hover:bg-amber-50 nav-text active-nav"><i class="fas fa-calendar-alt mr-3"></i>Schedule</a></li>
                <li><a href="./results.php" class="block px-4 py-2 hover-nav hover:bg-amber-50 nav-text"><i class="fas fa-trophy mr-3"></i>Results</a></li>
            </ul>
        </div>
    </nav>

    <div class="md:px-[8%] sm:px-[5%] px-[3%] min-h-screen py-6">
        <div class="sm:hidden block">
            <div class="flex items-center justify-center">
                <div class="flex items-center justify-center h-40 w-100"><img src="../assets/img/BSAU_Sportsfest.svg" alt="BSAU_Sportsfest"></div>
            </div>
        </div>
        <div class="items-center justify-start sm:block hidden">
            <h1 class="text-gray-800 text-2xl xs:text-4xl font-bold tracking-tight">BSAU Sportsfest 2025</h1>
        </div>

        <div class="sm:mt-5 mt-0 grid grid-cols-1 md:grid-cols-2 gap-5 mb-6">
            <div class="bg-gradient-to-br from-white to-amber-50 p-5 rounded-2xl shadow-md border border-amber-100 hover:shadow-lg transition duration-300">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-bold text-gray-800">Today's Games</h3>
                    <div class="h-8 w-8 rounded-full bg-gradient-to-r from-amber-500 to-amber-700 flex items-center justify-center">
                        <i class="fas fa-calendar-day text-white text-sm"></i>
                    </div>
                </div>
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-amber-100">
                        <div class="flex items-center">
                            <div class="h-10 w-10 rounded-full bg-amber-100 flex items-center justify-center mr-3">
                                <i class="fas fa-basketball-ball text-amber-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-sm">Basketball</h4>
                                <p class="text-xs text-gray-500">Honorato Galvez gym</p>
                            </div>
                        </div>
                        <span class="text-amber-700 font-medium text-sm">AM/PM</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-amber-100">
                        <div class="flex items-center">
                            <div class="h-10 w-10 rounded-full bg-amber-100 flex items-center justify-center mr-3">
                                <i class="fas fa-volleyball-ball text-amber-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-sm">Beach Volleyball</h4>
                                <p class="text-xs text-gray-500">Beach volley court</p>
                            </div>
                        </div>
                        <span class="text-amber-700 font-medium text-sm">AM/PM</span>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-white to-amber-50 p-5 rounded-2xl shadow-md border border-amber-100 hover:shadow-lg transition duration-300">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-bold text-gray-800">Key Events</h3>
                    <div class="h-8 w-8 rounded-full bg-gradient-to-r from-yellow-500 to-yellow-600 flex items-center justify-center">
                        <i class="fas fa-star text-white text-sm"></i>
                    </div>
                </div>
                <div class="space-y-3">
                    <div class="flex items-center p-3 bg-white rounded-lg border border-amber-100">
                        <div class="h-10 w-10 rounded-full bg-yellow-100 flex items-center justify-center mr-3">
                            <i class="fas fa-trophy text-yellow-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-sm">Awarding Ceremony</h4>
                            <p class="text-xs text-gray-500">Nov 21, Multi purpose gym</p>
                        </div>
                    </div>
                    <div class="flex items-center p-3 bg-white rounded-lg border border-amber-100">
                        <div class="h-10 w-10 rounded-full bg-yellow-100 flex items-center justify-center mr-3">
                            <i class="fas fa-medal text-yellow-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-sm">Cheerdance Competition</h4>
                            <p class="text-xs text-gray-500">Nov 21, Multi purpose gym</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-3 flex flex-col md:flex-row justify-between items-start md:items-center mb-6 bg-gradient-to-r from-white to-amber-50 rounded-2xl p-5 shadow-sm border border-amber-100">
            <div class="flex flex-col items-start mb-4 md:mb-0">
                <span class="text-amber-700 text-sm xs:text-xl font-medium mt-1 bg-amber-100 px-3 py-1 rounded-full">Game Schedule</span>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto">
                <div class="relative">
                    <input type="text" id="search-schedule" placeholder="Search sport or venue..." class="pl-10 pr-4 py-2.5 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent w-full text-sm xs:text-base shadow-sm">
                    <i class="fas fa-search absolute left-3 top-3.5 text-gray-400"></i>
                </div>
                <select id="day-filter" class="px-4 py-2.5 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent w-full md:w-auto text-sm xs:text-base shadow-sm bg-white">
                    <option value="all">All Days</option>
                    <option value="nov17">Nov 17 (Monday)</option>
                    <option value="nov18">Nov 18 (Tuesday)</option>
                    <option value="nov19">Nov 19 (Wednesday)</option>
                    <option value="nov20">Nov 20 (Thursday)</option>
                    <option value="nov21">Nov 21 (Friday)</option>
                </select>
            </div>
        </div>

        <section class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 mb-8">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gradient-to-r from-amber-50 to-amber-100">
                        <tr>
                            <th class="py-4 px-4 xs:px-6 text-left font-bold text-gray-700 text-sm xs:text-base">Date</th>
                            <th class="py-4 px-4 xs:px-6 text-left font-bold text-gray-700 text-sm xs:text-base">Sport</th>
                            <th class="py-4 px-4 xs:px-6 text-left font-bold text-gray-700 text-sm xs:text-base">Venue</th>
                            <th class="py-4 px-4 xs:px-6 text-left font-bold text-gray-700 text-sm xs:text-base">Time</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100" id="schedule-table-body">
                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov17" data-venue="Multi purpose gym">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 17</span>
                                    <span class="text-gray-500 text-xs">Monday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Mr. & Ms Intrams</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">Multi purpose gym</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">Opening</td>
                        </tr>
                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov17" data-venue="Honorato Galvez gym">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 17</span>
                                    <span class="text-gray-500 text-xs">Monday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Basketball (Men/Women)</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">Honorato Galvez gym</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>

                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov17" data-venue="Main campus beach volley court">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 17</span>
                                    <span class="text-gray-500 text-xs">Monday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Beach Volleyball</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">Main campus beach volley court</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>

                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov17" data-venue="College Library">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 17</span>
                                    <span class="text-gray-500 text-xs">Monday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Chess</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">College Library</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>

                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov17" data-venue="New site tennis court">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 17</span>
                                    <span class="text-gray-500 text-xs">Monday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Lawn Tennis</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">New site tennis court</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>

                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov17" data-venue="Main campus multi function hall">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 17</span>
                                    <span class="text-gray-500 text-xs">Monday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Mobile Legends</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">Main campus multi function hall</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>

                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov17" data-venue="Multi purpose gym">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 17</span>
                                    <span class="text-gray-500 text-xs">Monday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Sepak Takraw</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">Multi purpose gym</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>

                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov17" data-venue="BASC main covered court">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 17</span>
                                    <span class="text-gray-500 text-xs">Monday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Volleyball (Men/Women)</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">BASC main covered court</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>

                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov18" data-venue="Multi purpose gym">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 18</span>
                                    <span class="text-gray-500 text-xs">Tuesday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Arnis</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">Multi purpose gym</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>

                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov18" data-venue="Honorato Galvez gym">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 18</span>
                                    <span class="text-gray-500 text-xs">Tuesday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Basketball (Men/Women)</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">Honorato Galvez gym</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>
                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov18" data-venue="Main campus beach volley court">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 18</span>
                                    <span class="text-gray-500 text-xs">Tuesday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Beach Volleyball</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">Main campus beach volley court</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>
                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov18" data-venue="College Library">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 18</span>
                                    <span class="text-gray-500 text-xs">Tuesday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Chess</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">College Library</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>
                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov18" data-venue="New site tennis court">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 18</span>
                                    <span class="text-gray-500 text-xs">Tuesday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Lawn Tennis</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">New site tennis court</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>
                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov18" data-venue="Main campus multi function hall">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 18</span>
                                    <span class="text-gray-500 text-xs">Tuesday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Mobile Legend</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">Main campus multi function hall</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>
                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov18" data-venue="Cayetano hall">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 18</span>
                                    <span class="text-gray-500 text-xs">Tuesday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Table Tennis</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">Cayetano hall</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>
                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov18" data-venue="Multi purpose gym">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 18</span>
                                    <span class="text-gray-500 text-xs">Tuesday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Taekwondo</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">Multi purpose gym</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>
                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov18" data-venue="BASC main covered court">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 18</span>
                                    <span class="text-gray-500 text-xs">Tuesday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Volleyball (Men/Women)</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">BASC main covered court</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>



                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov19" data-venue="Honorato Galvez gym">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 19</span>
                                    <span class="text-gray-500 text-xs">Wednesday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Basketball (Men/Women)</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">Honorato Galvez gym</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>
                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov19" data-venue="Multi purpose gym">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 19</span>
                                    <span class="text-gray-500 text-xs">Wednesday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Badminton</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">Multi purpose gym</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>
                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov19" data-venue="Main campus  beach volley court">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 19</span>
                                    <span class="text-gray-500 text-xs">Wednesday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Beach Volleyball</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">Main campus beach volley court</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>
                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov19" data-venue="College Library">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 19</span>
                                    <span class="text-gray-500 text-xs">Wednesday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Chess</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">College Library</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>
                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov19" data-venue="New site tennis court">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 19</span>
                                    <span class="text-gray-500 text-xs">Wednesday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Lawn Tennis</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">New site tennis court</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>
                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov19" data-venue="Main campus multi function hall">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 19</span>
                                    <span class="text-gray-500 text-xs">Wednesday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Mobile Legend</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">Main campus multi function hall</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>
                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov19" data-venue="Multi purpose gym">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 19</span>
                                    <span class="text-gray-500 text-xs">Wednesday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Sepak Takraw</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">Multi purpose gym</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>
                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov19" data-venue="Cayetano hall">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 19</span>
                                    <span class="text-gray-500 text-xs">Wednesday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Table Tennis</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">Cayetano hall</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>
                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov19" data-venue="BASC main covered court">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 19</span>
                                    <span class="text-gray-500 text-xs">Wednesday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Volleyball (Men/Women)</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">BASC main covered court</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM/PM</td>
                        </tr>

                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov20" data-venue="All Venues">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 20</span>
                                    <span class="text-gray-500 text-xs">Thursday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">NO GAMES- Gym used for Cong Cholo payout</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">All Venues</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">--:--</td>
                        </tr>

                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov21" data-venue="Multi purpose gym">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 21</span>
                                    <span class="text-gray-500 text-xs">Friday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Awarding Ceremony</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">Multi purpose gym</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">AM</td>
                        </tr>

                        <tr class="schedule-row hover:bg-amber-50 transition duration-150" data-day="nov21" data-venue="Multi purpose gym">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-gray-800 text-sm xs:text-base">Nov 21</span>
                                    <span class="text-gray-500 text-xs">Friday</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <span class="font-medium text-sm xs:text-base">Cheerdance Competition</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                                    <span class="text-sm xs:text-base">Multi purpose gym</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-sm xs:text-base">PM</td>
                        </tr>
                    </tbody>
                </table>
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
    <script src="../assets/js/schedule.js"></script>
</body>

</html>