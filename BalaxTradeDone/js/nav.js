const button = document.getElementById("toggle");
const menu = document.getElementById("menu");

button.addEventListener("click", () => {
	menu.classList.toggle("close");
	menu.classList.toggle("open");
});

