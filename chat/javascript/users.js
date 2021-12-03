const searchBar = document.querySelector(".search input"),
  searchIcon = document.querySelector(".search button"),
  usersList = document.querySelector(".users-list");

searchIcon.onclick = () => {
  searchBar.classList.toggle("show");
  searchIcon.classList.toggle("active");
  searchBar.focus();
  if (searchBar.classList.contains("active")) {
    searchBar.value = "";
    searchBar.classList.remove("active");
  }
};
searchBar.onkeyup = () => {
  let searchTerm = searchBar.value;
  if (searchTerm != "") {
    searchBar.classList.add("active");
  } else {
    searchBar.classList.remove("active");
  }
  let formData = new FormData();
  formData.append("searchTerm", searchTerm);
  fetch("php/search.php", {
    method: "POST",
    body: formData,
  })
    .then((res) => res.text())
    .then((data) => {
      usersList.innerHTML = data;
    })
    .catch((err) => {
      console.log(err)
    });
};

setInterval(() => {
  fetch("php/users.php")
    .then((res) => res.text())
    .then((data) => {
      if (!searchBar.classList.contains("active")) {
        usersList.innerHTML = data;
      }
    })
    .catch((err) => console.log(err));
}, 500);
