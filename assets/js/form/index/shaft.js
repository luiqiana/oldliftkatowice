concreteShaft = document.getElementById("platformShaft-1");
steelShaft = document.getElementById("platformShaft-2");
withoutShaft = document.getElementById("platformShaft-3");
function platformHydraulicEngineFun() {
    concreteShaft.style.display = "block";
    steelShaft.style.display = "block";
    withoutShaft.style.display = "none";
    platformHydraulicEngineSelectedFun();
}
function platformScrewEngineFun() {
    concreteShaft.style.display = "none";
    steelShaft.style.display = "none";
    withoutShaft.style.display = "block";
    platformScrewEngineSelectedFun();
}