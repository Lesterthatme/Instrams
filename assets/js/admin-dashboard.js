// Remove the quit-btn event listener since it doesn't exist in the new page
// document.getElementById("quit-btn").addEventListener("click", function () {
//   window.location.href = "../function/admin/destroyer.php";
// });

// GET SPORT CATEGORIES BASED ON TYPE
const typeSelect = document.getElementById("type");
if (typeSelect) {
  typeSelect.addEventListener("change", (e) => {
    e.preventDefault();

    const selectedType = e.target.value;

    (async () => {
      try {
        const res = await fetch(
          `../function/admin/fetch-sport.php?type=${selectedType}`
        );

        if (!res.ok) {
          throw new Error("Network response was not ok");
        }

        const data = await res.json();

        if (data.success) {
          // alert(data.message);
          const category = document.getElementById("category");
          category.length = 1;
          document.getElementById("category-div").classList.remove("hidden");
          // console.table(data.data);
          data.data.forEach((item) => {
            const option = document.createElement("option");
            option.value = item.sport_id;
            let tempText = `${item.sport_name} - ${item.sub_category} (${item.gender})`;
            option.text = tempText;
            option.dataset.multiplier = item.multiplier;

            category.appendChild(option);
          });

          //remove hidden din sa susunod na form
          document.getElementById("winners-div").classList.remove("hidden");
          return;
        } else {
          alert(data.message);
          return;
        }
      } catch (err) {
        console.error(err);
      }
    })();
  });
}

// ADD/REMOVE SILVER PARTICIPANT
const addAnotherSilverBtn = document.getElementById("add-another-silver");
const removeAnotherSilverBtn = document.getElementById("remove-another-silver");
const additionalSilver = document.getElementById("additional-silver");

if (addAnotherSilverBtn && removeAnotherSilverBtn && additionalSilver) {
  addAnotherSilverBtn.addEventListener("click", (e) => {
    e.preventDefault();
    removeAnotherSilverBtn.classList.remove("hidden");
    addAnotherSilverBtn.classList.add("hidden");

    additionalSilver.innerHTML = `
                    <div class="border-t border-gray-200 pt-8">
                      <div class="space-y-4">
                        <h4 class="text-lg font-bold text-gray-800 flex items-center">
                          <i class="fas fa-medal text-amber-700 mr-2"></i>
                          Bronze Winner (Additional)
                        </h4>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                          <div>
                            <label for="bronze-winner2" class="block text-gray-700 font-medium mb-2">3rd Place Institute</label>
                            <select id="bronze-winner2" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200 bg-white">
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

                          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                              <label for="bronze-participant11" class="block text-gray-700 font-medium mb-2">Participant 1 (Optional)</label>
                              <input type="text" id="bronze-participant11" placeholder="Enter participant name" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200">
                            </div>
                            <div>
                              <label for="bronze-participant22" class="block text-gray-700 font-medium mb-2">Participant 2 (Optional)</label>
                              <input type="text" id="bronze-participant22" placeholder="Enter participant name" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
    `;

    additionalSilver.classList.remove("hidden");
  });

  removeAnotherSilverBtn.addEventListener("click", (e) => {
    e.preventDefault();
    removeAnotherSilverBtn.classList.add("hidden");
    addAnotherSilverBtn.classList.remove("hidden");
    additionalSilver.classList.add("hidden");
    additionalSilver.innerHTML = "";
  });
}

//fetch for winners
const saveBtn = document.getElementById("save-btn");
if (saveBtn) {
  saveBtn.addEventListener("click", (e) => {
    e.preventDefault();

    // confirm("are you sure you want to add this?");

    //variables
    const type = document.getElementById("type");
    const category = document.getElementById("category");
    const categorySelected = category.options[category.selectedIndex];
    const multiplier = categorySelected.dataset.multiplier;
    const goldWinner = document.getElementById("gold-winner");
    const goldParticipant1 = document.getElementById("gold-participant1");
    const goldParticipant2 = document.getElementById("gold-participant2");
    const silverWinner = document.getElementById("silver-winner");
    const silverParticipant1 = document.getElementById("silver-participant1");
    const silverParticipant2 = document.getElementById("silver-participant2");

    let bronzeWinner = document.getElementById("bronze-winner")
      ? document.getElementById("bronze-winner").value
      : "none";

    let bronzeWinner2 = document.getElementById("bronze-winner2")
      ? document.getElementById("bronze-winner2").value
      : "nothing";

    //checker if may mga laman ung mga required tags
    if (
      category.value == "none" ||
      goldWinner.value == "none" ||
      silverWinner.value == "none"
    ) {
      alert("Please complete the required Form.");
      return;
    }

    //save na sa object yung mga data
    let formData = {
      category: category.value,
      multiplier: multiplier,
      goldWinner: goldWinner.value,
      goldParticipant1: goldParticipant1.value,
      goldParticipant2: goldParticipant2.value,
      silverWinner: silverWinner.value,
      silverParticipant1: silverParticipant1.value,
      silverParticipant2: silverParticipant2.value,
    };

    let bronzeParticipant1 = "";
    let bronzeParticipant2 = "";
    let bronzeParticipant11 = "";
    let bronzeParticipant22 = "";

    if (bronzeWinner != "none") {
      bronzeParticipant1 = document.getElementById("bronze-participant1");
      bronzeParticipant2 = document.getElementById("bronze-participant2");

      //spread operator
      formData = {
        ...formData,
        bronzeWinner: bronzeWinner,
        bronzeParticipant1: bronzeParticipant1.value,
        bronzeParticipant2: bronzeParticipant2.value,
      };
    }

    if (bronzeWinner2 != "nothing") {
      if (bronzeWinner2 == "none" || bronzeWinner == "none") {
        alert("Please complete the required Form.");
        return;
      }
      bronzeParticipant11 = document.getElementById("bronze-participant11");
      bronzeParticipant22 = document.getElementById("bronze-participant22");

      formData = {
        ...formData,
        bronzeWinner2: bronzeWinner2,
        bronzeParticipant11: bronzeParticipant11.value,
        bronzeParticipant22: bronzeParticipant22.value,
      };
    }

    //send to fetch api
    (async () => {
      try {
        const res = await fetch("../function/admin/post-sport.php", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify(formData),
          credentials: "include",
        });

        if (!res.ok) {
          throw new Error("Network response was not ok");
        }

        const data = await res.json();

        if (data.success) {
          alert(data.message);

          type.selectedIndex = 0;
          category.selectedIndex = 0;
          goldWinner.selectedIndex = 0;
          silverWinner.selectedIndex = 0;
          goldParticipant1.value = "";
          goldParticipant2.value = "";
          silverParticipant1.value = "";
          silverParticipant2.value = "";

          if (bronzeWinner != "none") {
            let bronzeWinner = document.getElementById("bronze-winner");
            bronzeWinner.selectedIndex = 0;
            bronzeParticipant1.value = "";
            bronzeParticipant2.value = "";
          }

          if (bronzeWinner2 != "nothing") {
            let bronzeWinner2 = document.getElementById("bronze-winner2");
            bronzeWinner2.selectedIndex = 0;
            bronzeParticipant11.value = "";
            bronzeParticipant22.value = "";
          }

          document.getElementById("category-div").classList.add("hidden");
          document.getElementById("winners-div").classList.add("hidden");

          // Reset additional bronze section
          if (additionalSilver) {
            additionalSilver.classList.add("hidden");
            additionalSilver.innerHTML = "";
          }
          if (removeAnotherSilverBtn) {
            removeAnotherSilverBtn.classList.add("hidden");
          }
          if (addAnotherSilverBtn) {
            addAnotherSilverBtn.classList.remove("hidden");
          }

          return;
        } else {
          alert(data.message);
          return;
        }
      } catch (err) {
        console.error(err);
      }
    })();
  });
}
