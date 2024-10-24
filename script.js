const flipCard = document.getElementById("myFlipCard");

flipCard.addEventListener("touchstart", function() {
    flipCard.classList.toggle("flipped");
});

<script>
// Define product options for each mill
const millProducts = {
    mill1: ["Product 1", "Product 2", "Product 3"],
    mill2: ["Product 4", "Product 5", "Product 6"],
    mill3: ["Product 7", "Product 8", "Product 9"],
    mill4: ["Product 10", "Product 11", "Product 12"],
    mill5: ["Product 13", "Product 14", "Product 15"],
    mill6: ["Product 16", "Product 17", "Product 18"],
};

// Function to update product options based on the selected mill
function updateProductOptions() {
    const selectedMill = document.getElementById("mill").value;
    const productSelect = document.getElementById("product");
    const products = millProducts[selectedMill] || [];

    
    productSelect.innerHTML = '';

    
    products.forEach(product => {
        const option = document.createElement("option");
        option.value = product;
        option.text = product;
        productSelect.appendChild(option);
    });
}
</script>


