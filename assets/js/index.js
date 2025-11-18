//iife
(async () => {
  try {
    const res = await fetch("function/admin/fetch-medals.php?medal=total");

    if (!res.ok) throw new Error("Network response was not ok");

    const data = await res.json();

    if (data.success) {
      const totalMedalDiv = document.getElementById("total-medal-div");
      //   console.table(data.data);
      data.data.forEach((item) => {
        totalMedalDiv.innerHTML = `
        <div class="relative">
                        <img class="h-14 w-14 rounded-full mr-4 border-2 border-amber-300 shadow" 
                        src="assets/img/${item.logo}" alt="no-logo">
                    </div>
                    <div>
                        <h4 class="font-bold text-lg">${item.inti_name}</h4>
                        <p class="text-amber-700 font-medium">${item.totalMedal} Total Medals</p>
                    </div>
        `;
      });
    }
  } catch (err) {
    console.error(err);
  }
})();
(async () => {
  try {
    const res = await fetch("function/admin/fetch-medals.php?medal=gold");

    if (!res.ok) throw new Error("Network response was not ok");

    const data = await res.json();

    if (data.success) {
      const goldMedalDiv = document.getElementById("gold-medal-div");
      //   console.table(data.data);
      data.data.forEach((item) => {
        goldMedalDiv.innerHTML = `
         <img class="h-14 w-14 rounded-full mr-4 border-2 border-amber-300 shadow" src="assets/img/${item.logo}" alt="no-logo">
                     <div>
                       <h4 class="font-bold text-lg">${item.inti_name}</h4>
                         <p class="text-amber-700 font-medium">${item.totalGold} Gold Medals</p>
                    </div>
        `;
      });
    }
  } catch (err) {
    console.error(err);
  }
})();
(async () => {
  try {
    const res = await fetch("function/admin/fetch-medals.php?medal=ranking");

    if (!res.ok) throw new Error("Network response was not ok");

    const data = await res.json();

    if (data.success) {
      // console.table(data.data);
      const rankingDiv = document.getElementById("ranking-div");

      if (data.data.length == 0) {
        rankingDiv.innerHTML = `
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
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-yellow-600 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-500 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-amber-700 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-800 text-sm xs:text-base">0</td>
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
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-yellow-600 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-500 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-amber-700 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-800 text-sm xs:text-base">0</td>
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
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-yellow-600 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-500 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-amber-700 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-800 text-sm xs:text-base">0</td>
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
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-yellow-600 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-500 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-amber-700 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-800 text-sm xs:text-base">0</td>
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
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-yellow-600 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-500 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-amber-700 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-800 text-sm xs:text-base">0</td>
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
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-yellow-600 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-500 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-amber-700 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-800 text-sm xs:text-base">0</td>
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
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-yellow-600 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-500 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-amber-700 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-800 text-sm xs:text-base">0</td>
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
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-yellow-600 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-500 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-amber-700 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-800 text-sm xs:text-base">0</td>
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
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-yellow-600 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-500 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-amber-700 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-800 text-sm xs:text-base">0</td>
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
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-yellow-600 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-500 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-amber-700 text-sm xs:text-base">0</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-800 text-sm xs:text-base">0</td>
                        </tr>
        `;
      }

      let counter = 0;
      data.data.forEach((item) => {
        counter++;
        let tempRanking = numbering(counter);
        rankingDiv.innerHTML += `
            <tr class="hover:bg-amber-50 transition duration-150 ${item.bg_color} group">
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    ${tempRanking}
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6">
                                <div class="flex items-center">
                                    <img class="h-9 w-9 xs:h-10 xs:w-10 rounded-full mr-3 xs:mr-4 border-2 border-white shadow" 
                                    src="https://bascsdo.site/assets/img/${item.logo}" alt="${item.acronym}logo">
                                    <span class="font-medium text-sm xs:text-base hidden sm:block">${item.inti_name}</span>
                                    <span class="font-medium text-sm xs:text-base sm:hidden">${item.acronym}</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-yellow-600 text-sm xs:text-base">${item.totalGold}</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-500 text-sm xs:text-base">${item.totalSilver}</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-amber-700 text-sm xs:text-base">${item.totalBronze}</td>
                            <td class="py-4 px-4 xs:px-6 text-center font-bold text-gray-800 text-sm xs:text-base">${item.total}</td>
                        </tr>
        `;
      });
    }
  } catch (err) {
    console.error(err);
  }
})();

function numbering(num) {
  switch (num) {
    case 1:
      return `<span class="bg-gradient-to-br from-yellow-500 to-yellow-600 text-white rounded-full h-7 w-7 xs:h-8 xs:w-8 flex items-center justify-center font-bold text-sm xs:text-base shadow-sm group-hover:scale-110 transition duration-200">1</span>`;

    case 2:
      return ` <span class="bg-gradient-to-br from-gray-400 to-gray-500 text-white rounded-full h-7 w-7 xs:h-8 xs:w-8 flex items-center justify-center font-bold text-sm xs:text-base shadow-sm group-hover:scale-110 transition duration-200">2</span>`;
    case 3:
      return `
      <span class="bg-gradient-to-br from-amber-700 to-amber-800 text-white rounded-full h-7 w-7 xs:h-8 xs:w-8 flex items-center justify-center font-bold text-sm xs:text-base shadow-sm group-hover:scale-110 transition duration-200">3</span>`;
    case 4:
      return ` <div class="flex items-center">
                                    <span class="bg-gradient-to-br from-gray-200 to-gray-300 text-gray-700 rounded-full h-7 w-7 xs:h-8 xs:w-8 flex items-center justify-center font-bold text-sm xs:text-base shadow-sm">4</span>
                                </div>`;
    default:
      return `<div class="flex items-center">
                                    <span class="bg-gradient-to-br from-gray-200 to-gray-300 text-gray-700 rounded-full h-7 w-7 xs:h-8 xs:w-8 flex items-center justify-center font-bold text-sm xs:text-base shadow-sm">${num}</span>
                                </div>`;
  }
}
