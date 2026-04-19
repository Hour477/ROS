<template id="cartItemTemplate">
    <div class="cart-item" data-id="${itemId}">
        <img src="${itemImg}" class="rounded shadow-sm" style="width: 48px; height: 48px; object-fit: cover;" onerror="this.src='{{ asset('images/placeholder.jpg') }}'">
        <div class="flex-grow-1">
            <div class="fw-bold text-dark extra-small text-truncate" style="max-width: 150px;">${itemName}</div>
            <div class="text-primary fw-bold small">${currency}${lineTotal}</div>
        </div>
        <div class="qty-controls">
            <button class="qty-btn" onclick="updateQty('${itemId}', -1)">-</button>
            <span class="mx-2 fw-bold small">${qty}</span>
            <button class="qty-btn" onclick="updateQty('${itemId}', 1)">+</button>
        </div>
    </div>
</template>
