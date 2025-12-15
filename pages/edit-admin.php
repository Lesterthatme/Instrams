<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>edit page</title>

    <script src="../assets/js/edit-admin.js" defer></script>
</head>

<body class="bg-gray-200 select-none">
    <nav class="bg-red-200 shadow">This should be the nav</nav>

    <!-- Tables -->
    <div class="p-5 h-[95vh] bg-gray-100">
        <h1 class="text-xl mb-2">Tally Master Table</h1>

        <div class="overflow-auto rounded-lg shadow">
            <table class="w-full">
                <thead class="bg-gray-50 border-b-2 border-gray-200">
                    <tr>
                        <th class="p-3 text-sm font-semibold text-left">Sport</th>
                        <th class="p-3 text-sm font-semibold text-left">Category</th>
                        <th class="p-3 text-sm font-semibold text-left">Gender</th>
                        <th class="p-3 text-sm font-semibold text-left">Winners</th>
                        <th class="p-3 text-sm font-semibold text-left">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="bg-white">
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Ball Games</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Basketball</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap ">
                            <span class="p-1.5 text-xs font-medium text-white bg-blue-400 rounded-[2vw] hover:bg-blue-600 cursor-pointer">Men</span>
                        </td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">1st: CA || 2nd: CA || 3rd: CA & ICS</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                        </td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Ball Games</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Basketball</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap t">
                            <span class="p-1.5 text-xs font-medium text-white bg-pink-400 rounded-[2vw] hover:bg-pink-600 cursor-pointer">Women</span>
                        </td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">1st: CA || 2nd: CA || 3rd: CA & ICS</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap flex gap-1">
                            <button
                                class="update-btn p-1.5 text-xs font-medium uppercase tracking-wider text-white bg-blue-500 rounded-xl cursor-pointer hover:bg-blue-400 transition-colors duration-200"
                                title="Edit Button">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                </svg>

                            </button>
                            <button
                                class="delete-btn p-1.5 text-xs font-medium uppercase tracking-wider text-white bg-red-500 rounded-xl cursor-pointer hover:bg-red-400 transition-colors duration-200"
                                title="Delete Button">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>


                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

    <!-- modal -->
    <div class="flex fixed inset-0 bg-black/50 justify-center items-end transition-opacity duration-500
    sm:items-center
    " id="dialog" onclick="hideModal()">
        <div class="bg-white rounded shadow-md flex gap-5 flex-col w-full sm:w-lg md:w-2xl lg:w-4xl  max-h-[100vh]"
            onclick="event.stopImmediatePropagation()">
            <div class="flex p-8 gap-6">
                <div class="bg-green-100 rounded-full text-green-600 w-10 min-w-[50px] h-10 min-h-[50px] flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>
                </div>

                <div class="grow">
                    <h1 class="font-bold text-lg mb-2 text-gray-700">Update Winners</h1>
                    <p>Are you sure you want to udpate the winners?</p>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 px-8 overflow-y-auto">
                <div class="flex gap-2">
                    <h3>Sport: </h3>
                    <span class="uppercase text-gray-800 font-medium">Basketball</span> 
                </div>
                <div class="flex gap-2 ">
                     <h3>Category: </h3>
                    <span class="uppercase text-gray-800 font-medium">Basketball</span> 
                </div>
                <div class="sm:col-span-2 flex flex-col mb-1 me-1">
                    <label for="">Gold Winner</label>
                    <select name="" id="" class="border border-black w-full">
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
                <div class="flex flex-col me-1">
                    <label for="">Participant 1:</label>
                    <input type="text" class="border border-black">
                </div>
                <div class="flex flex-col me-1">
                    <label for="">Participant 2:</label>
                    <input type="text" class="border border-black">
                </div>
                <div class="sm:col-span-2 flex flex-col mb-1 me-1">
                    <label for="">Gold Winner</label>
                    <select name="" id="" class="border border-black w-full">
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
                <div class="flex flex-col me-1">
                    <label for="">Participant 1:</label>
                    <input type="text" class="border border-black">
                </div>
                <div class="flex flex-col me-1">
                    <label for="">Participant 2:</label>
                    <input type="text" class="border border-black">
                </div>
                <div class="sm:col-span-2 flex flex-col mb-1 me-1">
                    <label for="">Gold Winner</label>
                    <select name="" id="" class="border border-black w-full">
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
                <div class="flex flex-col me-1">
                    <label for="">Participant 1:</label>
                    <input type="text" class="border border-black">
                </div>
                <div class="flex flex-col me-1">
                    <label for="">Participant 2:</label>
                    <input type="text" class="border border-black">
                </div>
               
                

            </div>

            <div class="bg-gray-400/50 overflow-hidden p-2 flex justify-end gap-2">
                <button class="text-sm flex items-center justify-center px-3 py-2 
                bg-red-700 border border-gray-600  rounded   text-white cursor-pointer hover:bg-red-400 " onclick="hideModal()">Cancel</button>
                <button class="flex items-center justify-center px-3 py-2 
                 bg-green-700 border border-gray-600  rounded   text-white cursor-pointer hover:bg-green-400 text-sm" id="save-btn">Update</button>

            </div>
        </div>
    </div>

</body>

</html>