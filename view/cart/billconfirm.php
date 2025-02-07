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
        /* justify-content: space-between; */
        margin-bottom: 50px;
        margin-right: 20px;
        margin-left: 20px;
    }

    .left-box {
        width: 48%;
        margin-left: 70px;
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
        flex: 1;
        text-align: center;
    }

    .header-row span:nth-child(2) {
        flex: 2;
        /* Adjust width of product name */
    }

    .header-row span:nth-child(3) {
        flex: 3;
        /* Adjust width of price*/
    }

    .header-row span:nth-child(4) {
        flex: 5;
        /* Adjust width of remove button */
    }

    .header-row span:last-child {
        flex: 2.5;
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
        margin-right: 100px;
    }

    .cart-product-name {
        display: inline-block;
        width: 100px;
        /* Adjust width as needed */
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .right-box-container {
        display: flex;
        flex-wrap: wrap;
        /* Allow boxes to wrap to the next line if necessary */
        gap: 20px;
        /* Spacing between boxes */
    }


    .right-box {
        width: 100%;
        height: fit-content;
        margin-bottom: 20px;
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

    .linkdonhang a input {
        float: right;
        /* Đặt liên kết float bên trái */
        text-decoration: none;
        padding: 8px;
        /* Khoảng cách giữa nội dung và viền của input */
        border: 1px solid #ccc;
        /* Đặt viền cho input */
        border-radius: 5px;
        /* Đặt độ cong của viền */
        background-color: #f9f9f9;
        margin-right: 30px;
        /* Màu nền của input */
        font-size: 14px;
        /* Cỡ chữ */
        transition: border-color 0.3s, background-color 0.3s;
        /* Tạo hiệu ứng chuyển đổi cho viền và màu nền */



    }

    .linkdonhang a input:focus {
        outline: none;
        /* Loại bỏ đường viền xung quanh input khi tập trung */
        border-color: #007bff;
        /* Đổi màu viền khi input được tập trung */
        background-color: #fff;
        /* Đổi màu nền khi input được tập trung */
        animation: blink 1s infinite;
    }

    @keyframes blink {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .right-box .summary .subtotal,
    .right-box .summary .shipping,
    .right-box .summary .grand-total {
        font-weight: bold;
    }
</style>
<div class="cart-mother">Xác nhận đơn hàng</div>
<div class="linkdonhang">
    <a href="index.php?act=mybill"><input type="submit" value="Xem đơn hàng"></a>
</div>
<div class="cart-container">
    <div class="left-box">
        <div class="box-header">
            <div class="header-row">
                <span>Image</span>
                <span>Product</span>
                <span>Price</span>
                <span>Quantity</span>
                <span>Total</span>
            </div>
        </div>
        <?php
        foreach ($billct as $cart) {

        ?>
            <div class="cart-product">
                <div class="cart-product-details">
                    <img src="<?= $cart['image'] ?>" alt="Product Image" class="product-image" id="hinh<?= $i ?>">
                    <div class="cart-product-info">
                        <span class="cart-product-name"><?= $cart['name'] ?></span>
                        <span class="price" id="price<?= $i ?>">$<?= $cart['price'] ?></span>
                        <input type="text" class="quantity" value="<?= $cart['quantity'] ?>" min="1">
                    </div>
                </div>
                <span style="margin-right: 30px;" class="total-price">$<?= $cart['totalprice'] ?></span>
            </div>

        <?php
        }
        ?>

        <!-- Add more product entries as needed -->
    </div>
    <?php
    if (isset($bill) && (is_array($bill))) {
        extract($bill);
    }
    ?>

    <div class="right-box-container">
        <div class="right-box">
            <h2>THÔNG TIN ĐƠN HÀNG</h2>
            <div class="summary">
                <div class="subtotal">
                    <span>Mã đơn hàng:</span>
                    <span class="subtotal-amount">MDH<?= $bill['id'] ?></span>
                </div>
                <div class="shipping">
                    <span>Ngày đặt hàng:</span>
                    <span><?= $bill['bill_date'] ?></span>
                </div>
                <div class="grand-total">
                    <span>Phương thức thanh toán:</span>
                    <span class="total-amount"><?= $bill['payment_method'] ?></span>
                </div>
                <div class="grand-total">
                    <span>Grand total:</span>
                    <span class="total-amount"><?= $bill['grandtotal'] ?></span>
                </div>
            </div>
        </div>

        <div class="right-box">
            <h2>THÔNG TIN kHÁCH HÀNG</h2>
            <div class="summary">
                <div class="subtotal">
                    <span>Người đặt hàng:</span>
                    <span class="subtotal-amount"><?= $bill['bill_name'] ?></span>
                </div>
                <div class="shipping">
                    <span>Địa chỉ:</span>
                    <span><?= $bill['bill_address'] ?></span>
                </div>
                <div class="grand-total">
                    <span>Email:</span>
                    <span class="total-amount"><?= $bill['bill_email'] ?></span>
                </div>
                <div class="grand-total">
                    <span>Điện thoại:</span>
                    <span class="total-amount"><?= $bill['bill_tel'] ?></span>
                </div>
            </div>
        </div>
    </div>
</div>