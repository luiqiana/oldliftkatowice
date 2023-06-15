liftSection = document.getElementById("contact-form-type-lift");
platformSection = document.getElementById("contact-form-type-platforms");
stairsSection = document.getElementById("contact-form-type-stairs");
pavementSection = document.getElementById("contact-form-type-pavements");
function showLiftFun() {
    liftSection.style.display = "block";
    platformSection.style.display = "none";
    stairsSection.style.display = "none";
    pavementSection.style.display = "none";
}
function showPlatformFun() {
    liftSection.style.display = "none";
    platformSection.style.display = "block";
    stairsSection.style.display = "none";
    pavementSection.style.display = "none";
}
function showStairsFun() {
    liftSection.style.display = "none";
    platformSection.style.display = "none";
    stairsSection.style.display = "block";
    pavementSection.style.display = "none";
}
function showPavementFun() {
    liftSection.style.display = "none";
    platformSection.style.display = "none";
    stairsSection.style.display = "none";
    pavementSection.style.display = "block";
}