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
                            <button class="update-btn p-1.5 text-xs font-medium uppercase tracking-wider text-white bg-blue-500 rounded-lg cursor-pointer">Update</button>
                        </td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Ball Games</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Basketball</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap t">
                            <span class="p-1.5 text-xs font-medium text-white bg-pink-400 rounded-[2vw] hover:bg-pink-600 cursor-pointer">Women</span>
                        </td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">1st: CA || 2nd: CA || 3rd: CA & ICS</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                            <button class="update-btn p-1.5 text-xs font-medium uppercase tracking-wider text-white bg-blue-500 rounded-lg cursor-pointer">Update</button>
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
        <div class="bg-white rounded shadow-md flex gap-5 flex-col w-full sm:w-lg md:w-2xl lg:w-4xl"
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
            <div class="grid grid-cols-2">
                <div>1</div>
                <div>2</div>
                <div>2</div>
                <div>2</div>

            </div>

            <div class="bg-gray-400/50 overflow-hidden p-2 flex justify-end gap-2">
                <button class="bg-red-700 border border-gray-600  rounded px-3 py-2 text-white cursor-pointer hover:bg-red-400 text-sm" onclick="hideModal()">Cancel</button>
                <button class="bg-green-700 border border-gray-600  rounded px-3 py-2 text-white cursor-pointer hover:bg-green-400 text-sm" id="save-btn">Update</button>

            </div>
        </div>
    </div>

</body>

</html>