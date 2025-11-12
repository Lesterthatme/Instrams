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
    <nav class="bg-amber-50 px-[5%] py-[10px] shadow-sm border-b border-gray-200 sticky top-0 z-10">
        <div class="w-full flex justify-between items-center">
            <div class="flex items-center justify-center font-bold gap-2">
                <img class="h-[50px] w-[50px]" src="./assets/img/BASC_sports_development_office.png" alt="BASC_sports_development_office_LOGO">
                <h1 class="text-gray-800 hover:text-gray-600 cursor-pointer transition duration-100 text-2xl">BASC Sports Development Office</h1>
            </div>
            <div class="">
            </div>
        </div>
    </nav>

    <div class="px-[8%] min-h-screen py-8">
        <div class="py-4 flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
            <div class="flex flex-col items-start mb-4 md:mb-0">
                <h1 class="text-gray-800 hover:text-gray-600 cursor-pointer transition duration-100 text-3xl font-bold">BSAU Sportsfest 2025</h1>
                <span class="text-gray-600 text-xl mt-1">Medal Table</span>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 w-full md:w-auto">
                <div class="relative">
                    <input type="text" placeholder="Search institute..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent w-full">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent w-full md:w-auto">
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
        
        <section class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-amber-50">
                        <tr>
                            <th class="py-4 px-6 text-left font-semibold text-gray-700">Rank</th>
                            <th class="py-4 px-6 text-left font-semibold text-gray-700">Institute</th>
                            <th class="py-4 px-6 text-center font-semibold text-gray-700">
                                <div class="flex items-center justify-center">
                                    <i class="fas fa-medal text-yellow-500 mr-2"></i>
                                    Gold
                                </div>
                            </th>
                            <th class="py-4 px-6 text-center font-semibold text-gray-700">
                                <div class="flex items-center justify-center">
                                    <i class="fas fa-medal text-gray-400 mr-2"></i>
                                    Silver
                                </div>
                            </th>
                            <th class="py-4 px-6 text-center font-semibold text-gray-700">
                                <div class="flex items-center justify-center">
                                    <i class="fas fa-medal text-amber-700 mr-2"></i>
                                    Bronze
                                </div>
                            </th>
                            <th class="py-4 px-6 text-center font-semibold text-gray-700">Total</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-[#eeeeeebe] transition duration-150 bg-linear-20 from-[#33ac3d] from-10% via-[#d5ffd0] via-35% to-[#fff] to-90%">
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <span class="bg-yellow-500 text-white rounded-full h-8 w-8 flex items-center justify-center font-bold">1</span>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <img class="h-10 w-10 rounded-full mr-4" src="./assets/img/CA_Logo.png" alt="CA_Logo">
                                    <span class="font-medium">College of Agriculture</span>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center font-bold text-yellow-600">36</td>
                            <td class="py-4 px-6 text-center font-bold text-gray-500">57</td>
                            <td class="py-4 px-6 text-center font-bold text-amber-700">40</td>
                            <td class="py-4 px-6 text-center font-bold text-gray-800">133</td>
                        </tr>
                        
                        <tr class="hover:bg-[#eeeeeebe] transition duration-150">
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <span class="bg-gray-400 text-white rounded-full h-8 w-8 flex items-center justify-center font-bold">2</span>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <img class="h-10 w-10 rounded-full mr-4" src="./assets/img/CA_Logo.png" alt="CA_Logo">
                                    <span class="font-medium">College of Education</span>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center font-bold text-yellow-600">28</td>
                            <td class="py-4 px-6 text-center font-bold text-gray-500">42</td>
                            <td class="py-4 px-6 text-center font-bold text-amber-700">35</td>
                            <td class="py-4 px-6 text-center font-bold text-gray-800">105</td>
                        </tr>
                        
                        <tr class="hover:bg-[#eeeeeebe] transition duration-150">
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <span class="bg-amber-700 text-white rounded-full h-8 w-8 flex items-center justify-center font-bold">3</span>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <img class="h-10 w-10 rounded-full mr-4" src="./assets/img/CA_Logo.png" alt="CA_Logo">
                                    <span class="font-medium">College of Engineering and Technology</span>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center font-bold text-yellow-600">25</td>
                            <td class="py-4 px-6 text-center font-bold text-gray-500">38</td>
                            <td class="py-4 px-6 text-center font-bold text-amber-700">42</td>
                            <td class="py-4 px-6 text-center font-bold text-gray-800">105</td>
                        </tr>
                        
                        <tr class="hover:bg-[#eeeeeebe] transition duration-150">
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <span class="bg-[#f1f1f1] text-gray-700 rounded-full h-8 w-8 flex items-center justify-center font-bold">4</span>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <img class="h-10 w-10 rounded-full mr-4" src="./assets/img/CA_Logo.png" alt="CA_Logo">
                                    <span class="font-medium">College of Management</span>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center font-bold text-yellow-600">22</td>
                            <td class="py-4 px-6 text-center font-bold text-gray-500">30</td>
                            <td class="py-4 px-6 text-center font-bold text-amber-700">28</td>
                            <td class="py-4 px-6 text-center font-bold text-gray-800">80</td>
                        </tr>
                        
                        <tr class="hover:bg-[#eeeeeebe] transition duration-150">
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <span class="bg-[#f1f1f1] text-gray-700 rounded-full h-8 w-8 flex items-center justify-center font-bold">5</span>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <img class="h-10 w-10 rounded-full mr-4" src="./assets/img/CA_Logo.png" alt="CA_Logo">
                                    <span class="font-medium">DRT Campus</span>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center font-bold text-yellow-600">18</td>
                            <td class="py-4 px-6 text-center font-bold text-gray-500">25</td>
                            <td class="py-4 px-6 text-center font-bold text-amber-700">32</td>
                            <td class="py-4 px-6 text-center font-bold text-gray-800">75</td>
                        </tr>

                        <tr class="hover:bg-[#eeeeeebe] transition duration-150">
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <span class="bg-[#f1f1f1] text-gray-700 rounded-full h-8 w-8 flex items-center justify-center font-bold">5</span>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <img class="h-10 w-10 rounded-full mr-4" src="./assets/img/CA_Logo.png" alt="CA_Logo">
                                    <span class="font-medium">BTVC</span>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center font-bold text-yellow-600">18</td>
                            <td class="py-4 px-6 text-center font-bold text-gray-500">25</td>
                            <td class="py-4 px-6 text-center font-bold text-amber-700">32</td>
                            <td class="py-4 px-6 text-center font-bold text-gray-800">75</td>
                        </tr>

                        <tr class="hover:bg-[#eeeeeebe] transition duration-150">
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <span class="bg-[#f1f1f1] text-gray-700 rounded-full h-8 w-8 flex items-center justify-center font-bold">5</span>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <img class="h-10 w-10 rounded-full mr-4" src="./assets/img/CA_Logo.png" alt="CA_Logo">
                                    <span class="font-medium">FFHNAS</span>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center font-bold text-yellow-600">18</td>
                            <td class="py-4 px-6 text-center font-bold text-gray-500">25</td>
                            <td class="py-4 px-6 text-center font-bold text-amber-700">32</td>
                            <td class="py-4 px-6 text-center font-bold text-gray-800">75</td>
                        </tr>

                        <tr class="hover:bg-[#eeeeeebe] transition duration-150">
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <span class="bg-[#f1f1f1] text-gray-700 rounded-full h-8 w-8 flex items-center justify-center font-bold">5</span>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <img class="h-10 w-10 rounded-full mr-4" src="./assets/img/CA_Logo.png" alt="CA_Logo">
                                    <span class="font-medium">Institute of Arts and Sciences</span>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center font-bold text-yellow-600">18</td>
                            <td class="py-4 px-6 text-center font-bold text-gray-500">25</td>
                            <td class="py-4 px-6 text-center font-bold text-amber-700">32</td>
                            <td class="py-4 px-6 text-center font-bold text-gray-800">75</td>
                        </tr>

                        <tr class="hover:bg-[#eeeeeebe] transition duration-150">
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <span class="bg-[#f1f1f1] text-gray-700 rounded-full h-8 w-8 flex items-center justify-center font-bold">5</span>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <img class="h-10 w-10 rounded-full mr-4" src="./assets/img/CA_Logo.png" alt="CA_Logo">
                                    <span class="font-medium">Institute of Computer Studies</span>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center font-bold text-yellow-600">18</td>
                            <td class="py-4 px-6 text-center font-bold text-gray-500">25</td>
                            <td class="py-4 px-6 text-center font-bold text-amber-700">32</td>
                            <td class="py-4 px-6 text-center font-bold text-gray-800">75</td>
                        </tr>

                        <tr class="hover:bg-[#eeeeeebe] transition duration-150">
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <span class="bg-[#f1f1f1] text-gray-700 rounded-full h-8 w-8 flex items-center justify-center font-bold">5</span>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <img class="h-10 w-10 rounded-full mr-4" src="./assets/img/CA_Logo.png" alt="CA_Logo">
                                    <span class="font-medium">Institute of Veterenary Medicine</span>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-center font-bold text-yellow-600">18</td>
                            <td class="py-4 px-6 text-center font-bold text-gray-500">25</td>
                            <td class="py-4 px-6 text-center font-bold text-amber-700">32</td>
                            <td class="py-4 px-6 text-center font-bold text-gray-800">75</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-md">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Top Performing Institute</h3>
                <div class="flex items-center">
                    <img class="h-16 w-16 rounded-full mr-4" src="./assets/img/CA_Logo.png" alt="CA_Logo">
                    <div>
                        <h4 class="font-bold text-xl">College of Agriculture</h4>
                        <p class="text-gray-600">133 Total Medals</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-md">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Most Gold Medals</h3>
                <div class="flex items-center">
                    <img class="h-16 w-16 rounded-full mr-4" src="./assets/img/CA_Logo.png" alt="CA_Logo">
                    <div>
                        <h4 class="font-bold text-xl">College of Agriculture</h4>
                        <p class="text-gray-600">36 Gold Medals</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-md">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Close Competition</h3>
                <div class="space-y-2">
                    <div class="flex justify-between">
                        <span>College of Education</span>
                        <span class="font-bold">105</span>
                    </div>
                    <div class="flex justify-between">
                        <span>College of Engineering and Technology</span>
                        <span class="font-bold">105</span>
                    </div>
                    <div class="text-sm text-gray-500 mt-2">Tied for 2nd place</div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="bg-amber-50 border-t border-gray-200 py-6 px-[8%] mt-12">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center mb-4 md:mb-0">
                <img class="h-10 w-10 mr-3" src="./assets/img/BASC_sports_development_office.png" alt="BASC_sports_development_office_LOGO">
                <span class="text-gray-700 font-medium">BASC Sports Development Office</span>
            </div>
            <div class="text-gray-600 text-sm">
                &copy; 2025 BSAU Sportsfest. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>