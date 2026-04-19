<!-- Main Cart Container -->
<div class="cart-container d-flex flex-column h-100">
    <div class="p-4 border-bottom bg-light">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="fw-black mb-0"><i data-lucide="shopping-cart" class="me-2 text-primary"></i>Current Order</h5>
            <div class="d-flex gap-2">
                <button class="btn btn-sm btn-outline-primary border-2 rounded-circle hover-lift" onclick="persistCartManually()" title="Save / Hold Order">
                    <i data-lucide="save" style="width: 16px;"></i>
                </button>
                <button class="btn btn-sm btn-outline-danger border-2 rounded-circle hover-lift" onclick="clearCart()" title="Clear Cart">
                    <i data-lucide="trash-2" style="width: 16px;"></i>
                </button>
            </div>
        </div>

        @include('admin.orders.partials.order_type_selector')
    </div>

    @include('admin.cart.item')

    <!-- Cart Items List -->
    <div class="flex-grow-1 overflow-auto p-4" id="cartItems">
        {{-- Items will be rendered here by JS --}}
        <div class="text-center py-5 opacity-50 empty-cart-msg">
            <i data-lucide="shopping-bag" class="mb-3" style="width: 48px; height: 48px;"></i>
            <p class="fw-bold">Your cart is empty</p>
        </div>
    </div>

    <!-- Summary & Checkout -->
    <div class="p-4 bg-light border-top mt-auto">
        @include('admin.cart.summary')
    </div>
</div>
