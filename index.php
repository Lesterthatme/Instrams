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

    <script src="./assets/js/menu.js" defer></script>
    <script src="./assets/js/index.js" defer></script>
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
                    <li class="hover-nav active-nav"><a href="#" class="flex items-center gap-2"><i class="fas fa-home text-sm"></i> Home</a></li>
                    <li class="hover-nav"><a href="./pages/schedule.php" class="flex items-center gap-2"><i class="fas fa-calendar-alt text-sm"></i> Schedule</a></li>
                    <li class="hover-nav"><a href="./pages/results.php" class="flex items-center gap-2"><i class="fas fa-trophy text-sm"></i> Results</a></li>
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
                <li><a href="#" class="block px-4 py-2 hover-nav hover:bg-amber-50 nav-text active-nav"><i class="fas fa-home mr-3"></i> Home</a></li>
                <li><a href="./pages/schedule.php" class="block px-4 py-2 hover-nav hover:bg-amber-50 nav-text"><i class="fas fa-calendar-alt mr-3"></i>Schedule</a></li>
                <li><a href="./pages/results.php" class="block px-4 py-2 hover-nav hover:bg-amber-50 nav-text"><i class="fas fa-trophy mr-3"></i>Results</a></li>
            </ul>
        </div>
    </nav>

    <div class="md:px-[8%] sm:px-[4%] px-[1%] min-h-screen py-6">
        <div class="sm:hidden block">
            <div class="flex items-center justify-center ">
                <div class="flex items-center justify-center h-40 w-200"><img src="./assets/img/BSAU_Sportsfest.svg" alt="BSAU_Sportsfest"></div>
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
                        <img src="./assets/img/ca.svg" alt="CA Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="./assets/img/coed.svg" alt="COED Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="./assets/img/cet.svg" alt="CET Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="./assets/img/cm.svg" alt="CM Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="./assets/img/drt.svg" alt="DRT Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="./assets/img/btvc.svg" alt="BTVC Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="./assets/img/ffhnas.svg" alt="FFHNAS Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="./assets/img/ias.svg" alt="IAS Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="./assets/img/ics.svg" alt="ICS Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="./assets/img/ivm.svg" alt="IVM Logo" class="max-w-full max-h-full object-contain">
                    </div>
                </div>
                
                <div class="carousel-track flex space-x-8">
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="./assets/img/ca.svg" alt="CA Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="./assets/img/coed.svg" alt="COED Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="./assets/img/cet.svg" alt="CET Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="./assets/img/cm.svg" alt="CM Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="./assets/img/drt.svg" alt="DRT Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="./assets/img/btvc.svg" alt="BTVC Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="./assets/img/ffhnas.svg" alt="FFHNAS Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="./assets/img/ias.svg" alt="IAS Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="./assets/img/ics.svg" alt="ICS Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="./assets/img/ivm.svg" alt="IVM Logo" class="max-w-full max-h-full object-contain">
                    </div>
                </div>
            </div>
        </div>

        <div class="sm:mt-5 mt-0 grid grid-cols-1 md:grid-cols-2 gap-5 mb-6">
            <div class="bg-gradient-to-br from-white to-amber-50 p-5 rounded-2xl shadow-md border border-amber-100 hover:shadow-lg transition duration-300">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-bold text-gray-800">Top Performing Institute</h3>
                    <div class="h-8 w-8 rounded-full bg-gradient-to-r from-amber-500 to-amber-700 flex items-center justify-center">
                        <i class="fas fa-trophy text-white text-sm"></i>
                    </div>
                </div>
                <div class="flex items-center" id="total-medal-div">
                    <div class="relative">
                        <img class="h-14 w-14 rounded-full mr-4 border-2 border-amber-300 shadow" src="" alt="no-logo">
                    </div>
                    <div>
                        <h4 class="font-bold text-lg">No Data</h4>
                        <p class="text-amber-700 font-medium">0 Total Medals</p>
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
                <div class="flex items-center" id="gold-medal-div">
                    <img class="h-14 w-14 rounded-full mr-4 border-2 border-amber-300 shadow" src="" alt="no-logo">
                    <div>
                        <h4 class="font-bold text-lg">No data</h4>
                        <p class="text-amber-700 font-medium">0 Gold Medals</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-3 flex flex-col md:flex-row justify-between items-start md:items-center mb-6 bg-gradient-to-r from-white to-amber-50 rounded-2xl p-5 shadow-sm border border-amber-100">
            <div class="flex flex-col items-start mb-4 md:mb-0">
                <span class="text-amber-700 text-sm xs:text-xl font-medium mt-1 bg-amber-100 px-3 py-1 rounded-full">Overall Medal Tally</span>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto">
                <div class="relative">
                    <input type="text" id="institute-search" placeholder="Search institute..." class="pl-10 pr-4 py-2.5 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent w-full text-sm xs:text-base shadow-sm">
                    <i class="fas fa-search absolute left-3 top-3.5 text-gray-400"></i>
                </div>
                <select id="institute-filter" class="px-4 py-2.5 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent w-full md:w-auto text-sm xs:text-base shadow-sm bg-white">
                    <option value="all">All Institutes</option>
                    <option value="CA">CA</option>
                    <option value="COED">COED</option>
                    <option value="CET">CET</option>
                    <option value="CM">CM</option>
                    <option value="DRT">DRT</option>
                    <option value="BTVC">BTVC</option>
                    <option value="FFHNAS">FFHNAS</option>
                    <option value="IAS">IAS</option>
                    <option value="ICS">ICS</option>
                    <option value="IVM">IVM</option>
                </select>
            </div>
        </div>

        <section class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gradient-to-r from-amber-50 to-amber-100">
                        <tr>
                            <th class="py-4 px-2 sm:px-4 xs:px-3 text-left font-bold text-gray-700 text-xs sm:text-base">Rank</th>
                            <th class="py-4 px-4 sm:px-6 text-left font-bold text-gray-700 text-xs sm:text-base">Institute</th>
                            <th class="py-4 px-3 sm:px-6 text-center font-bold text-gray-700 text-xs sm:text-base">
                                <div class="flex items-center justify-center">
                                    <i class="fas fa-medal text-yellow-500 mr-2"></i>
                                    <span class="xs:inline">Gold</span>
                                </div>
                            </th>
                            <th class="py-4 px-3 sm:px-6 text-center font-bold text-gray-700 text-xs sm:text-base">
                                <div class="flex items-center justify-center">
                                    <i class="fas fa-medal text-gray-400 mr-2"></i>
                                    <span class="xs:inline">Silver</span>
                                </div>
                            </th>
                            <th class="py-4 px-3 sm:px-6 text-center font-bold text-gray-700 text-xs sm:text-base">
                                <div class="flex items-center justify-center">
                                    <i class="fas fa-medal text-amber-700 mr-2"></i>
                                    <span class="xs:inline">Bronze</span>
                                </div>
                            </th>
                            <th class="py-4 px-4 sm:px-6 text-center font-bold text-gray-700 text-xs sm:text-base">Total</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100" id="ranking-div">

                    </tbody>
                </table>
            </div>
        </section>

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


</body>

</html>