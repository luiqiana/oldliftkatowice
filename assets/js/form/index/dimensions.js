/*
    LIFT
*/
liftDimensionsElectric = document.getElementById("contact-form-dimensions-electric");
liftDimensionsHydraulic = document.getElementById("contact-form-dimensions-hydraulic");
liftDimSelfset2 = document.getElementById("contact-form-input-selfset-2");
liftDimSelfset3 = document.getElementById("contact-form-input-selfset-3");
function lineEngineFun() {
    liftDimensionsElectric.style.display = "block";
    liftDimensionsHydraulic.style.display = "none";
}
function hydraulicEngineFun() {
    liftDimensionsElectric.style.display = "none";
    liftDimensionsHydraulic.style.display = "block";
}
function liftDimChangeCapacityFun(liftCapacityNumber) {
    if(liftCapacityNumber.value == "other") {
        liftDimSelfset2.style.pointerEvents = "all";
        liftDimSelfset3.style.pointerEvents = "all";
        liftDimSelfset2.style.opacity = "1";
        liftDimSelfset3.style.opacity = "1";
    }
    else if(liftCapacityNumber.value != "other") {
        liftDimensionsCapacityFun(liftCapacityNumber.value);
        liftDimSelfset2.style.pointerEvents = "none";
        liftDimSelfset3.style.pointerEvents = "none";
        liftDimSelfset2.style.opacity = "0.6";
        liftDimSelfset3.style.opacity = "0.6";
    }
}

/*
    PLATFORM
*/
platformDimensionsHydraulic = document.getElementById("contact-form-dimensions-hydraulic-platform");
platformDimensionsScrew = document.getElementById("contact-form-dimensions-screw-platform");
platformDimSelfset2 = document.getElementById("contact-form-input-selfset-2-platform");
platformDimSelfset3 = document.getElementById("contact-form-input-selfset-3-platform");
function platformHydraulicEngineSelectedFun() {
    platformDimensionsHydraulic.style.display = "block";
    platformDimensionsScrew.style.display = "none";
}
function platformScrewEngineSelectedFun() {
    platformDimensionsHydraulic.style.display = "none";
    platformDimensionsScrew.style.display = "block";
}
function platformDimChangeCapacityFun(platformCapacityNumber) {
    if(platformCapacityNumber.value == "other") {
        platformDimSelfset2.style.pointerEvents = "all";
        platformDimSelfset3.style.pointerEvents = "all";
        platformDimSelfset2.style.opacity = "1";
        platformDimSelfset3.style.opacity = "1";
    }
    else if(platformCapacityNumber.value != "other") {
        platformDimensionsCapacityFun(platformCapacityNumber.value);
        platformDimSelfset2.style.pointerEvents = "none";
        platformDimSelfset3.style.pointerEvents = "none";
        platformDimSelfset2.style.opacity = "0.6";
        platformDimSelfset3.style.opacity = "0.6";
    }
}