function generateSubtypeInputs(selectedType) {
    const subtypeInputContainer = document.getElementById("subtypeInputContainer");
    const selectedType = document.getElementById("product").value;

    subtypeInputContainer.innerHTML = '';

    
    let subtypeInput;
    if (selectedType === "product1" || selectedType === "product2" || selectedType === "product3" || selectedType === "product9" || selectedType === "product12" || selectedType === "product7" || selectedType === "product11" || selectedType === "product16") {
       
        subtypeInput = document.createElement("input");
        subtypeInput.type = "number";
        subtypeInput.placeholder = "Enter 1D-dimension (millimeters)";

    } else if (selectedType === "product4" || selectedType === "product13") {
       
        subtypeInput = document.createElement("input");
        subtypeInput.type = "number";
        subtypeInput.placeholder = "Enter length of the coil(meters)";
    
    } else if (selectedType === "product5" || selectedType === "product8" || selectedType === "product14" || selectedType === "product6" || selectedType === "product15" || selectedType === "product19") {
       
        subtypeInput = document.createElement("input");
        subtypeInput.type = "3d";
        subtypeInput.placeholder = "Enter width*depth*thickness(3D)";
       
    } else if (selectedType === "product10") {
       
        subtypeInput = document.createElement("input");
        subtypeInput.type = "number";
        subtypeInput.placeholder = "Enter length of the coil( > 16meters)";
       
    } else if (selectedType === "product17") {
       
        subtypeInput = document.createElement("input");
        subtypeInput.type = "2d";
        subtypeInput.placeholder = "Enter length*breadth(2D)";
       
    } else if (selectedType === "product18") {
       
        subtypeInput = document.createElement("input");
        subtypeInput.type = "4d";
        subtypeInput.placeholder = "Enter depth*width*web thickness*flange thickness(4D)";
    
    }
        subtypeInputContainer.appendChild(subtypeInput);
}

// Add event listener to the main type select element
document.getElementById("product").addEventListener("change", generateSubtypeInputs);

// Initial call to generateSubtypeInputs to handle initial state
generateSubtypeInputs();