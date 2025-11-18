document.addEventListener("DOMContentLoaded", function () {
  const sportFilter = document.getElementById("sport-filter");
  const sportSections = document.querySelectorAll(".sport-section");
  const sportHeaders = document.querySelectorAll(".sport-header");

  // Accordion functionality
  sportHeaders.forEach((header) => {
    header.addEventListener("click", function () {
      const content = this.nextElementSibling;
      const icon = this.querySelector(".fa-chevron-down");

      content.classList.toggle("hidden");
      this.classList.toggle("active");
      icon.classList.toggle("rotate-180");

      sportHeaders.forEach((otherHeader) => {
        if (otherHeader !== this) {
          const otherContent = otherHeader.nextElementSibling;
          const otherIcon = otherHeader.querySelector(".fa-chevron-down");
          otherContent.classList.add("hidden");
          otherHeader.classList.remove("active");
          otherIcon.classList.remove("rotate-180");
        }
      });
    });
  });

  // Sport filter functionality only
  if (sportFilter) {
    sportFilter.addEventListener("change", filterSports);
  }

  function filterSports() {
    const selectedSport = sportFilter.value;

    sportSections.forEach((section) => {
      const sportType = section.getAttribute("data-sport");

      // Sport mapping for filtering
      const sportMap = {
        arnis: "combat",
        taekwondo: "combat",
        badminton: "racket",
        "table-tennis": "racket",
        "lawn-tennis": "racket",
        basketball: "ball",
        volleyball: "ball",
        "beach-volleyball": "ball",
        "sepak-takraw": "ball",
        chess: "mind",
        "mobile-legends": "mind",
      };

      const matchesSport =
        selectedSport === "all" || sportMap[selectedSport] === sportType;

      if (matchesSport) {
        section.style.display = "";
      } else {
        section.style.display = "none";
      }
    });
  }

  // Auto-open first section on load
  if (sportHeaders.length > 0) {
    setTimeout(() => {
      sportHeaders[0].click();
    }, 100);
  }
});

//total event
(async () => {
  try {
    const res = await fetch("../function/admin/fetch-medals.php?medal=games");

    if (!res.ok) throw new Error(`error ${res.status}`);

    const data = await res.json();

    if (data.success) {
      document.getElementById(
        "tot-events"
      ).textContent = `${data.data[0].totalEvents}`;
    }
  } catch (err) {
    console.error(err);
  }
})();

//Arnis
function callWinners(cate, gender, div) {
  (async () => {
    const res = await fetch(
      `../function/admin/fetch-medals.php?medal=category&sport=${cate}&gender=${gender}`
    );
    if (!res.ok) throw new Error("Request Failed.");
    const data = await res.json();

    const arr = [];

    if (data.success) {
      //pumapasok
      //   console.table(data.data);
      let counter = -1;
      let hasBronze = 0;
      data.data.forEach((item) => {
        //add to new
        const exists = arr.some((obj) => obj.id === item.sport_id);

        if (!exists) {
          counter++;
          hasBronze = 0;
          // add new object with Id
          arr.push({
            id: item.sport_id,
            cat: item.sub_category,
            gold: item.medal_type,
            goldA: item.acronym,
            goldl: item.logo,
            gPar1: item.participant1,
            gPar2: item.participant2,
          });
        } else if (item.medal_type == "Silver") {
          arr[counter][item.medal_type] = item.medal_type;
          arr[counter][`${item.medal_type}A`] = item.acronym;
          arr[counter][`${item.medal_type}l`] = item.logo;
          arr[counter]["sPar1"] = item.participant1;
          arr[counter]["sPar2"] = item.participant2;
        } else if (hasBronze == 0 && item.medal_type == "Bronze") {
          if (item.medal_type == "Bronze") {
            hasBronze = 1;
          }
          arr[counter][item.medal_type] = item.medal_type;
          arr[counter][`${item.medal_type}A`] = item.acronym;
          arr[counter][`${item.medal_type}l`] = item.logo;
          arr[counter]["bPar1"] = item.participant1;
          arr[counter]["bPar2"] = item.participant2;
        } else if (hasBronze == 1 && item.medal_type == "Bronze") {
          arr[counter]["bPar11"] = item.participant1;
          arr[counter]["bPar22"] = item.participant2;
          arr[counter][`${item.medal_type}a`] = item.medal_type;
          arr[counter][`${item.medal_type}Aa`] = item.acronym;
          arr[counter][`${item.medal_type}la`] = item.logo;
        }
      });

      //   console.table(arr);

      const tempDiv = document.getElementById(`${div}`);

      arr.forEach((item) => {
        let tempBronze = ``;
        let tempBronzeFirst = ``;
        if (item.Bronzea) {
          tempBronze = `
                 <span class="font-medium text-gray-600 text-sm">${
                   item.bPar11
                 }, ${item.bPar22}</span>
                                                                <div class="flex items-center justify-center mt-1 ${item.BronzeAa.toLowerCase()} round">
                                                                    <img class="h-5 w-5 rounded-full mr-2" src="https://bascsdo.site/assets/img/${
                                                                      item.Bronzela
                                                                    }" alt="${
            item.BronzeAa
          }">
                                                                    <span class="text-xs">${
                                                                      item.BronzeAa
                                                                    }</span>
                                                                </div>
            `;
        }
        if (item.Bronze) {
          tempBronzeFirst = `
                <div class="flex flex-col items-center text-center">
                            <span class="font-medium text-gray-600 text-sm">${item.bPar1}, ${item.bPar2}</span>
                            <div class="flex items-center justify-center mt-1 ${item.BronzeA} round">
                                <img class="h-5 w-5 rounded-full mr-2" src="https://bascsdo.site/assets/img/${item.Bronzel}" alt="${item.BronzeA}">
                                <span class="text-xs">${item.BronzeA}</span>
                            </div>
                        </div>
                        <div class="flex flex-col items-center text-center">
                            ${tempBronze}
                        </div>
            `;
        }
        tempDiv.innerHTML += `
            <tr class="hover:bg-amber-50 transition duration-150">
                <td class="py-3 px-4 font-medium text-sm">${item.cat}</td>
                <td class="py-3 px-4">
                    <div class="flex flex-col items-center text-center">
                        <span class="font-bold text-yellow-600 text-sm">${item.gPar1}, ${item.gPar2}</span>
                        <div class="flex items-center justify-center mt-1 ${item.goldA} round">
                            <img class="h-5 w-5 rounded-full mr-2" src="https://bascsdo.site/assets/img/${item.goldl}" alt="${item.goldA}">
                                <span class="text-xs">${item.goldA}</span>
                            </div>
                        </div>
                </td>
                <td class="py-3 px-4">
                        <div class="flex flex-col items-center text-center">
                            <span class="font-medium text-gray-600 text-sm">${item.sPar1}, ${item.sPar2}</span>
                            <div class="flex items-center justify-center mt-1 ${item.SilverA} round">
                                <img class="h-5 w-5 rounded-full mr-2" src="https://bascsdo.site/assets/img/${item.Silverl}" alt="${item.SilverA}">
                                <span class="text-xs">${item.SilverA}</span>
                            </div>
                        </div>
                    </td>
                    <td class="py-3 px-4">
                        ${tempBronzeFirst}
                    </td>
                </tr>
        `;
      });
    }
  })();
}

callWinners("Arnis", "Men", "arnis-men");
callWinners("Arnis", "Women", "arnis-women");
callWinners("Taekwondo", "Men", "taekwondo-men");
callWinners("Taekwondo", "Women", "taekwondo-women");
callWinners("Badminton", "Men", "Badminton-men");
callWinners("Badminton", "Women", "Badminton-women");
callWinners("Badminton", "Mixed", "Badminton-mixed");
callWinners("Table Tennis", "Men", "TableTennis-men");
callWinners("Table Tennis", "Women", "TableTennis-women");
callWinners("Table Tennis", "Mixed", "TableTennis-mixed");
callWinners("Lawn Tennis", "Men", "LawnTennis-men");
callWinners("Lawn Tennis", "Women", "LawnTennis-women");
callWinners("Basketball", "men", "Basketball-men");
callWinners("Basketball", "Women", "Basketball-women");
callWinners("Volleyball", "men", "Volleyball-men");
callWinners("Volleyball", "Women", "Volleyball-women");
callWinners("Sepak Takraw", "men", "SepakTakraw-men");
callWinners("Sepak Takraw", "Women", "SepakTakraw-women");
callWinners("Chess", "Men", "Chess-men");
callWinners("Chess", "Women", "Chess-women");
callWinners("Chess", "Men", "Chess-men");
callWinners("Chess", "Women", "Chess-women");
callWinners("Mobile Legends", "Men", "MobileLegends-men");
callWinners("Mobile Legends", "Women", "MobileLegends-women");
