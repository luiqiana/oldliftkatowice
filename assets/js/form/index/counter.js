/*
    Lift
*/
// Capacity
document.querySelector(".minus-liftcapacity").setAttribute("disabled", "disabled");
var liftCapacityValue = 100;
document.querySelector(".plus-liftcapacity").addEventListener("click", function() {
    liftCapacityValue = Number(document.getElementById("liftcapacityid").value);
    liftCapacityValue += 10;
    document.getElementById("liftcapacityid").value = liftCapacityValue;
    if(liftCapacityValue > 100) {
        document.querySelector(".minus-liftcapacity").removeAttribute("disabled");
        document.querySelector(".minus-liftcapacity").classList.remove("disabled");
    }
});
document.querySelector(".minus-liftcapacity").addEventListener("click", function() {
    liftCapacityValue = Number(document.getElementById("liftcapacityid").value);
    liftCapacityValue -= 10;
    document.getElementById("liftcapacityid").value = liftCapacityValue;
    if(liftCapacityValue == 100) {
        document.querySelector(".minus-liftcapacity").setAttribute("disabled", "disabled");
    }
});

// Ready dimensions
function liftDimensionsCapacityFun(liftCapacityNumber) {
    switch (liftCapacityNumber) {
        case "1":
            liftCapacityValue = 630;
            break;
        case "2":
            liftCapacityValue = 800;
            break;
        case "3":
            liftCapacityValue = 1000;
            break;
        case "4":
            liftCapacityValue = 1125;
            break;
        case "5":
            liftCapacityValue = 1600;
            break;
        case "6":
            liftCapacityValue = 2000;
            break;
    }
    document.getElementById("liftcapacityid").value = liftCapacityValue;
    document.querySelector(".minus-liftcapacity").removeAttribute("disabled");
    document.querySelector(".minus-liftcapacity").classList.remove("disabled");
}

// Stop value
document.querySelector(".minus-liftStops").setAttribute("disabled", "disabled");
var liftStopValue = 2;
document.querySelector(".plus-liftStops").addEventListener("click", function() {
    liftStopValue++;
    document.getElementById("liftstopid").value = liftStopValue;
    if(liftStopValue > 2) {
        document.querySelector(".minus-liftStops").removeAttribute("disabled");
        document.querySelector(".minus-liftStops").classList.remove("disabled");
    }
});
document.querySelector(".minus-liftStops").addEventListener("click", function() {
    liftStopValue--;
    document.getElementById("liftstopid").value = liftStopValue;
    if(liftStopValue == 2) {
        document.querySelector(".minus-liftStops").setAttribute("disabled", "disabled");
    }
});

/*
    PLATFORM
*/
// Capacity
document.querySelector(".minus-platformcapacity").setAttribute("disabled", "disabled");
var platformCapacityValue = 100;
document.querySelector(".plus-platformcapacity").addEventListener("click", function() {
    platformCapacityValue = Number(document.getElementById("platformcapacityid").value);
    platformCapacityValue += 10;
    document.getElementById("platformcapacityid").value = platformCapacityValue;
    if(platformCapacityValue > 100) {
        document.querySelector(".minus-platformcapacity").removeAttribute("disabled");
        document.querySelector(".minus-platformcapacity").classList.remove("disabled");
    }
});
document.querySelector(".minus-platformcapacity").addEventListener("click", function() {
    platformCapacityValue = Number(document.getElementById("platformcapacityid").value);
    platformCapacityValue -= 10;
    document.getElementById("platformcapacityid").value = platformCapacityValue;
    if(platformCapacityValue == 100) {
        document.querySelector(".minus-platformcapacity").setAttribute("disabled", "disabled");
    }
});

// Ready dimensions
function platformDimensionsCapacityFun(platformCapacityNumber) {
    switch (platformCapacityNumber) {
        case "1":
            platformCapacityValue = 400;
            break;
        case "2":
            platformCapacityValue = 400;
            break;
        case "3":
            platformCapacityValue = 300;
            break;
    }
    document.getElementById("platformcapacityid").value = platformCapacityValue;
    document.querySelector(".minus-platformcapacity").removeAttribute("disabled");
    document.querySelector(".minus-platformcapacity").classList.remove("disabled");
}

// Stop value
document.querySelector(".minus-platformStops").setAttribute("disabled", "disabled");
var platformStopValue = 2;
document.querySelector(".plus-platformStops").addEventListener("click", function() {
    platformStopValue++;
    document.getElementById("platformstopid").value = platformStopValue;
    if(platformStopValue > 2) {
        document.querySelector(".minus-platformStops").removeAttribute("disabled");
        document.querySelector(".minus-platformStops").classList.remove("disabled");
    }
});
document.querySelector(".minus-platformStops").addEventListener("click", function() {
    platformStopValue--;
    document.getElementById("platformstopid").value = platformStopValue;
    if(platformStopValue == 2) {
        document.querySelector(".minus-platformStops").setAttribute("disabled", "disabled");
    }
});