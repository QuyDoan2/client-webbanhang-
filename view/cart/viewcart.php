
<style>
    
    .cart-mother {
        margin-top: 100px;
        display: flex;
        color: #38cff0;
        font-size: 48px;
        font-weight: bold;
        justify-content: center;
        text-decoration: underline;
    }

    .cart-container {
        margin-top: 30px;
        display: flex;
        justify-content: space-between;
        margin-bottom: 50px;
        margin-right: 20px;
        margin-left: 20px;
    }

    .left-box {
        width: 48%;
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .box-header {
        border-bottom: 1px solid #ccc;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .box-header h2 {
        margin-bottom: 10px;
    }

    .header-row {
        display: flex;
        justify-content: space-between;
        font-weight: bold;
        text-align: center;
        align-items: center;
    }

    .header-row span {
        flex: 2;
        text-align: center;
    }

    .header-row span:nth-child(2) {
        flex: 3;
        /* Adjust width of product name */
    }

    .header-row span:nth-child(3) {
        flex: 3;
        /* Adjust width of price*/
    }

    .header-row span:nth-child(4) {
        flex: 3;
        /* Adjust width of remove button */
    }

    .header-row span:nth-child(5) {
        flex: 3;
        /* Adjust width of remove button */
    }

    .header-row span:last-child {
        flex: 2;
        /* Adjust width of total */
    }


    .cart-product {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #ccc;
        padding-bottom: 10px;
        margin-bottom: 10px;
    }

    .cart-product-details {
        display: flex;
        align-items: center;
    }

    .cart-product-details img {
        width: 80px;
        /* Adjust image width as needed */
        height: auto;
        margin-right: 20px;
        /* Add spacing between image and other details */
        border-radius: 4px;
        /* Add a border radius for rounded corners */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        /* Add a subtle shadow effect */
    }

    .cart-product-info {
        flex: 1;
    }


    .cart-product-info span {
        margin-right: 50px;

    }

    .cart-product-name {
        display: inline-block;
        width: 100px;
        /* Adjust width as needed */
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .cart-delete-btn {
        margin-left: 30px;
        margin-right:30px;
        background-color: #ff4d4d;
        color: #fff;
        border: none;
        padding: 5px 10px;
        border-radius: 4px;
        cursor: pointer;
    }

    .delete-btn:hover {
        background-color: #ff3333;
    }
    /* Responsive styles for input */
.quantity {
    width: 50px; /* Default width for input */
    padding: 5px; /* Default padding */
    margin-right: 10px; /* Default margin */
}

@media only screen and (max-width: 768px) {
    .quantity {
        width: 40px; /* Adjusted width for smaller screens */
        margin-right: 5px; /* Adjusted margin for smaller screens */
    }
}


    .right-box {
     width: 48%;
     height: fit-content;
     margin-left: 30px;
     background-color: #fff;
     border-radius: 8px;
     padding: 20px;
     box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
 }
    .right-box .summary {
        margin-bottom: 20px;
    }

    .right-box .summary div {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .right-box .summary .subtotal,
    .right-box .summary .shipping,
    .right-box .summary .grand-total {
        font-weight: bold;
    }

    /* Định dạng cho phương thức thanh toán */
    .payment-method {
        margin-top: 20px;
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .payment-method span {
        font-weight: bold;
        margin-right: 10px;
    }

    .payment-method label {
        margin-right: 15px;
    }

    .right-box button {
        float: inline-end;
        margin-top: 20px;
        margin-left: 10px;
        background-color: #15d167;
        padding: 10px;
        color: floralwhite;
        font-weight: 1f;
        border-radius: 4px;
        border: 1px solid #38cff0;
        animation: pulse 1.5s infinite;
    }
    @keyframes pulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(1);
    }
}
.selected {
        background-color: #ff; /* Màu nền vàng */
        color: black; /* Màu chữ trắng */
        border: 2px solid #fff; /* Đường viền vàng */
        border-radius: 4px; /* Bo góc */
    }
    .selected:hover {
    background-color:#fff; /* Màu nền vàng */
   
}

.size {
        display: inline-block;
        padding: 3px 6px;
        margin: 5px;
        cursor: pointer;
        border: 1px solid #ccc;
        border-radius: 4px;
}

</style>
<div class="cart-mother">Trang giỏ hàng</div>
<div class="cart-container">
    <div class="left-box">
        <div class="box-header">
            <div class="header-row">
                <span>Ảnh</span>
                <span>Sản phẩm</span>
                <span>Giá</span>
                <span>Số lượng</span>
                <span>Xóa</span>
                <span>Size</span>
                <span>Tổng</span>
            </div>
        </div>
        <?php

        $subtotal = 0;
        $phiship = 15;
        $i = 0;
        $grandtotal = $phiship;
        // Check if the cart exists in the session
        if (isset($_SESSION['mycart']) && !empty($_SESSION['mycart'])) {
            // Loop through each product in the cart
            foreach ($_SESSION['mycart'] as $product) {
                $id = $product[0];
                $hinh = $product[1];
                $ttien = $product[4] * $product[3];
                $subtotal += $ttien; //$subtotal = subtol + ttien



        ?>
                <div class="cart-product">
                    <div class="cart-product-details">
                        <img src="<?= $hinh ?>" alt="Product Image" class="product-image" id="hinh<?= $i ?>">
                        <div class="cart-product-info">
                            <span class="cart-product-name"><?= $product[2] ?></span>
                            <span class="price" id="price<?= $i ?>">$<?= $product[3] ?></span>
                            
                            <input type="number" class="quantity" data-id="<?= $id ?>" value="<?= $product[4] ?>" min="1" id="quantity<?= $i ?>">
                            <a href="index.php?act=dlcart&idcart=<?= $i ?>"><button class="cart-delete-btn" id="xoa">Xóa</button></a>
                        </div>
                        <select class="selected size" id="size<?= $i ?>">
     <option value="M">M</option>
     <option value="L">L</option>
     <option value="XL">XL</option>
     <option value="2XL">2XL</option>
     <option value="3XL">3XL</option>
 </select>
 
                    </div>
                    <span style="margin-right: 30px;" class="total-price" id="total<?= $i ?>">$<?= $ttien ?></span>
                </div>
        <?php

                $i += 1;
            }
            $grandtotal += $subtotal; // gan = gan +sub
        } else {
            // If the cart is empty, display a message
            echo "<p>Your cart is empty</p>";
        }
        ?>
        <!-- Add more product entries as needed -->
    </div>
    <div class="right-box">
        <div class="summary">

            <div class="subtotal">
                <span>Tổng giá tiền:</span>
                <span class="subtotal-amount" id="subtotal">$<?= $subtotal ?></span>
            </div>
            <div class="shipping">
                <span>Phí giao hàng:</span>
                <span> $15 </span>
            </div>
            <div class="grand-total">
                <span>Tổng cộng:</span>
                <span class="total-amount" id="grandtotal">$<?= $grandtotal ?></span>
                <input type="hidden" id="grandtotallast" value="<?= $grandtotal ?>">
            </div>
        </div>
        <div class="payment-method">
            <span>Chọn phương thức thanh toán:</span>
            <label><input type="radio" name="payment_method" value="1"> Thanh toán khi nhận hàng</label>
            <label><input type="radio" name="payment_method" value="2"> Thanh toán Stripe(được miễn phí ship)</label>
        </div>
        <a href="index.php?act=bill" onclick="checkPaymentMethod(event)"><button type="submit">TIẾP TỤC ĐẶT HÀNG</button></a>
        <a href="index.php?act=dlall"><button id="xoagiohang">Xóa tất cả</button></a>
    </div>

</div>

<script>
    // JavaScript code to update total price when quantity changes;

    document.addEventListener('DOMContentLoaded', function() {
        var quantities = document.querySelectorAll('.quantity');
 
        quantities.forEach(function(quantity, index) {
            quantity.addEventListener('input', function() {
                var price = parseFloat(document.getElementById('price' + index).innerText.replace('$', ''));
                var quantityValue = parseInt(this.value);
                var totalPrice = price * quantityValue;
                document.getElementById('total' + index).innerText = '$' + totalPrice.toFixed(2);
                updateSubtotalAndGrandTotal();
                
                document.cookie = ('quantity' + quantity.getAttribute('data-id' ) + '=' + quantityValue);
            


            });
        });


        function updateSubtotalAndGrandTotal() {
            var subtotal = 0;
            var grandtotal = 0;
            var prices = document.querySelectorAll('.total-price');
            prices.forEach(function(price) {
                subtotal += parseFloat(price.innerText.replace('$', ''));
            });
            grandtotal = subtotal + <?=$phiship?> ;
            // Save subtotal and grand total to localStorage
            sessionStorage.setItem('subtotal', subtotal.toFixed(2));
            sessionStorage.setItem('grandtotal', grandtotal.toFixed(2));

            // Update display of subtotal and grand total
            document.getElementById('subtotal').innerText = '$' + subtotal.toFixed(2);
            document.getElementById('grandtotal').innerText = '$' + grandtotal.toFixed(2);
            document.getElementById('xoagiohang').addEventListener('click', function() {
                // Xóa tất cả dữ liệu trong localStorage
                sessionStorage.clear();
            });

         }
     // Load values from sessionStorage when the page loads
// window.onload = function() {
//     for (var i = 0; i < quantities.length; i++) {
//         var savedQuantity = sessionStorage.getItem('quantity' + i);
//         var savedTotalPrice = sessionStorage.getItem('totalPrice' + i);
//         if (savedQuantity !== null && savedTotalPrice !== null) {
//             document.getElementById('total' + i).innerText = '$' + parseFloat(savedTotalPrice).toFixed(2)
//             quantities[i].value = savedQuantity;
//         }
//     }
//     var savedSubtotal = sessionStorage.getItem('subtotal');
//     var savedGrandtotal = sessionStorage.getItem('grandtotal');
//     if (savedSubtotal !== null && savedGrandtotal !== null) {
//         document.getElementById('subtotal').innerText = '$' + parseFloat(savedSubtotal).toFixed(2);
//         document.getElementById('grandtotal').innerText = '$' + parseFloat(savedGrandtotal).toFixed(2);
//     }
// };


    });


</script>