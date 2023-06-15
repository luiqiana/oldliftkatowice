projectsShowMoreBtn = document.getElementById("projects-show-more-button");
projectsShowLessBtn = document.getElementById("projects-show-less-button");
projectsSecondSection = document.getElementById("projects-second-section");

function projectsShowMore() {
    projectsShowMoreBtn.style.display = "none";
    projectsShowLessBtn.style.display = "inline-block";
    projectsSecondSection.style.display = "block";
}

function projectsShowLess() {
    projectsSecondSection.style.display = "none";
    projectsShowMoreBtn.style.display = "inline-block";
    projectsShowLessBtn.style.display = "none";
}