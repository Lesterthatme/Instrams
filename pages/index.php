<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
</head>

<body class="bg-gray-200 flex justify-center items-center h-screen select-none">
    <button class="bg-white py-3 px-5 rounded text-gray-600 shadow-md cursor-pointer" onclick="openModal()">
        Open Modal
    </button>
    <div class="fixed inset-0 bg-black/50 justify-center items-center hidden transition-opacity duration-500" id="dialog" onclick="hideModal()">
        <div class="bg-white rounded shadow-md w-lg md:w-[60%] flex gap-5 flex-col" onclick="event.stopImmediatePropagation()">
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

            <div class="bg-gray-400/50 overflow-hidden p-2 flex justify-end gap-2">
                <button class="bg-red-700 border border-gray-600  rounded px-3 py-2 text-white cursor-pointer hover:bg-red-400 text-sm" onclick="hideModal()">Cancel</button>
                <button class="bg-green-700 border border-gray-600  rounded px-3 py-2 text-white cursor-pointer hover:bg-green-400 text-sm">Update</button>

            </div>
        </div>
    </div>
    <script>
        function openModal() {
            const dialog = document.getElementById('dialog');
            dialog.classList.remove('hidden');
            dialog.classList.add('flex');
            setTimeout(() => {
                dialog.classList.add('opacity-100');
            }, 20);
        }

        function hideModal() {
            const dialog = document.getElementById('dialog');
            dialog.classList.add('opacity-0');
            dialog.classList.remove('opacity-100');
            setTimeout(() => {
                dialog.classList.add('hidden');
                dialog.classList.remove('flex');
            }, 20);
        }
    </script>
</body>

</html>