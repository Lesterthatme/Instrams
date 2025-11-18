document.getElementById("quit-btn").addEventListener("click", function () {
  window.location.href = "../function/admin/destroyer.php";
});

// GET SPORT CATEGORIES BASED ON TYPE
const typeSelect = document.getElementById("type");
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
        document.getElementById("category-div").classList.remove("d-none");
        // console.table(data.data);
        data.data.forEach((item) => {
          const option = document.createElement("option");
          option.value = item.sport_id;
          let tempText = `${item.sport_name} - ${item.sub_category} (${item.gender})`;
          option.text = tempText;
          option.dataset.multiplier = item.multiplier;

          category.appendChild(option);
        });

        //remove d-none din sa susunod na form
        document.getElementById("winners-div").classList.remove("d-none");
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

// ADD/REMOVE SILVER PARTICIPANT
const addAnotherSilverBtn = document.getElementById("add-another-silver");
const removeAnotherSilverBtn = document.getElementById("remove-another-silver");
const additionalSilver = document.getElementById("additional-silver");

addAnotherSilverBtn.addEventListener("click", (e) => {
  e.preventDefault();
  removeAnotherSilverBtn.classList.remove("d-none");
  addAnotherSilverBtn.classList.add("d-none");

  additionalSilver.innerHTML = `
<div class="row mt-2">
                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="d-flex">
                                <label for="bronze-winner2" class="form-label pe-2">3rd:</label>
                                <select name="" id="bronze-winner2" class="form-select bronze-winner2">
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

                            <div class="col-12 col-md-6">
                                <label for="bronze-participant11" class="form-label">Participant 1:</label>
                                <input type="text" placeholder="(Optional)" class="form-control" id="bronze-participant11">
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="bronze-participant22" class="form-label">Participant 2:</label>
                                <input type="text" placeholder="(Optional)" class="form-control" id="bronze-participant22">
                            </div>

                        </div>
  `;
});

removeAnotherSilverBtn.addEventListener("click", (e) => {
  e.preventDefault();
  removeAnotherSilverBtn.classList.add("d-none");
  addAnotherSilverBtn.classList.remove("d-none");
  additionalSilver.innerHTML = "";
});

//fetch for winners
const saveBtn = document.getElementById("save-btn");
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

  // console.table(formData);

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

        document.getElementById("category-div").classList.add("d-none");
        document.getElementById("winners-div").classList.add("d-none");
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
