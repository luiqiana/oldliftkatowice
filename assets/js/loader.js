preloader = document.getElementById("preloader");
header = document.getElementById("header");
main = document.getElementById("main");
footer = document.getElementById("footer");

function siteLoaded() {
    preloader.style.display = "none";
    header.style.display = "block";
    main.style.display = "block";
    footer.style.display = "block";
};
