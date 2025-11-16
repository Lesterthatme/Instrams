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
      console.table(data.data);
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
