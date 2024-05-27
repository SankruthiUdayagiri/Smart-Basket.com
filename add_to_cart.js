function updateCartSummary(itemCount, totalPrice) {
    document.getElementById("total-items").textContent = `Total Items: ${itemCount}`;
    document.getElementById("total-price").textContent = `Total Price: ₹${totalPrice}`;
  }
  
  // Add click event listener to entire body (adjust selector if needed)
  document.body.addEventListener("click", function(event) {
    // Check if clicked element has "product" class
    if (event.target.classList.contains("product")) {
      // Get product details (assuming elements are within the clicked element)
      const productImage = event.target.querySelector(".product-image").getAttribute("src");
      const productName = event.target.querySelector(".product-name").textContent; // Add ".product-name" element if present
      const productPrice = parseFloat(event.target.querySelector(".product-price").textContent.slice(2)); // Assuming price is in format "RsXXX"
  
      // Simulate adding to cart (replace with actual cart logic if needed)
      console.log(`Product "${productName}" added to cart!`);
  
      // Update cart summary (assuming one item is added)
      const currentItemCount = parseInt(document.getElementById("total-items").textContent.split(": ")[1]);
      const currentTotalPrice = parseFloat(document.getElementById("total-price").textContent.slice(2));
      updateCartSummary(currentItemCount + 1, currentTotalPrice + productPrice);
  
      // Optionally, create a new cart item element on the page (for demo purposes)
      // This would need additional HTML structure and styling
      // const newCartItem = createCartItem(productImage, productName, productPrice);
      // document.querySelector(".cart-items").appendChild(newCartItem); // Assuming ".cart-items" element exists
    }
  });
  
  // Function to create a cart item element (optional, for demo only)
  // You'll need to adjust the HTML structure and styling based on your design
  function createCartItem(imageUrl, name, price) {
    const cartItem = document.createElement("div");
    cartItem.classList.add("cart-item");
    cartItem.innerHTML = `
      <img src="${imageUrl}" alt="${name}">
      <p>${name}</p>
      <p>₹${price.toFixed(2)}</p>
    `;
    return cartItem;
  }
  