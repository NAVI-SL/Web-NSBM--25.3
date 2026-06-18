function calculate() {
    let price = document.gerElementByID("price").value;
    let quantity = document.gerElementByID("quantity").value;

    price = parseFloat(price);
    quantity = parseFloat(quantity);

    let total = price * quantity;

    document.getElementById("totalValue").innerText = total;

}