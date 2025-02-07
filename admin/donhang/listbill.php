<style>
        /* Main content container */
.main-container {
    float: right;
    width: 70%;
    margin: 50px auto; /* Centers the content horizontally */
    background-color: #f9f9f9;
    margin-right:40px;
    margin-top: 100px;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Form title styles */
.frmtitle h1 {
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

/* Form content styles */
.frmcontent {
    margin-top: 20px;
}

/* Table styles */
.frmdsloai table {
    width: 100%;
    border-collapse: collapse;
}

.frmdsloai th,
.frmdsloai td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: left;
}

.frmdsloai th {
    background-color: #f2f2f2;
}

/* Button container styles */
.rowkhac.mb10 {
    margin-bottom: 10px;
}


</style>
<div class="main-container">
<div class="rowkhac">
    <div class="rowkhac frmtitle mb">
        <H1>DANH SÁCH ĐƠN HÀNG</H1>
    </div>
    
    <div class="rowkhac frmcontent">
        <div class="rowkhac mb10 frmdsloai">
            <table>
                <tr>
                    <th>MÃ LOẠI</th>
                    <th>THÔNG TIN KHÁCH HÀNG</th>
                    <th>SỐ LƯỢNG </th>
                    <th>TỔNG GIÁ TRỊ</th>
                    <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    <th>NGÀY ĐẶT HÀNG</th>
                    <th>PHƯƠNG THỨC THANH TOÁN</th>
                   
                   
                </tr>
                <?php
                foreach ($all_bill as $bill) {
                    //khai khac data tu bang sanpham
                    extract($bill);
                    $customer = $bill["bill_name"].'
                    <br> '.$bill["bill_tel"].'
                    <br> '.$bill["bill_email"].'
                    <br> '.$bill["bill_address"]
                    ;
                    $countsp = count_total_quantity($bill['id']);
                  
                  
                    
                    $tthd = get_ttdh($bill['bill_status']);
                    echo '  <tr>
                                <td>MDH:' . $bill['id'] . '</td>
                                <td>' . $customer. '</td>
                                <td>' . $countsp . '</td>
                                <td>' . $bill['grandtotal'] . '</td>
                                <td>' . $tthd  . '</td>
                                <td>' . $bill['bill_date'] . '</td>
                                <td>' . $bill['payment_method'] . '</td>
                                
                            </tr>';
                }
                ?>
            </table>
        </div>
    </div>
</div>
</div>