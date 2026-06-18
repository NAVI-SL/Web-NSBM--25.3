let totalStock = 100;

function bunspurchase() {
    var quantity = parseInt(document.getElementById("quantity").value);
    var pricePerBun = 50.00;

    if (isNaN(quantity) || quantity <= 0) {
        alert("Please enter a valid quantity, bro.");
        return;
    }

    if (quantity > totalStock) {
        alert("Not enough buns in stock!");
        return;
    }

    var totalPrice = quantity * pricePerBun;
    totalStock -= quantity;

    document.getElementById("totalvalue").textContent = totalPrice.toFixed(2);
    document.getElementById("remainingbuns").textContent = totalStock;
    document.getElementById("stock").textContent = totalStock;
}