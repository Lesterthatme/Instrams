<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>edit page</title>
</head>

<body>
    <nav class="bg-red-200 h-10">This should be the nav</nav>
    <div class="p-5 h-screen bg-gray-100">
        <h1 class="text-xl mb-2">Your orders</h1>

        <div class="overflow-auto rounded-lg shadowq">
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
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap text-center">
                            <span class="p-1.5 text-xs font-medium text-white bg-blue-400 rounded-[2vw] hover:bg-blue-600 cursor-pointer">Men</span>
                        </td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">1st: CA || 2nd: CA || 3rd: CA & ICS</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                            <button class="p-1.5 text-xs font-medium uppercase tracking-wider text-white bg-blue-500 rounded-lg cursor-pointer">Update</button>
                        </td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Ball Games</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Basketball</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap text-center">
                            <span class="p-1.5 text-xs font-medium text-white bg-pink-400 rounded-[2vw] hover:bg-pink-600 cursor-pointer">Women</span>
                        </td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">1st: CA || 2nd: CA || 3rd: CA & ICS</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                            <button class="p-1.5 text-xs font-medium uppercase tracking-wider text-white bg-blue-500 rounded-lg cursor-pointer">Update</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>