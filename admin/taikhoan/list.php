<style>
        /* Main content container */
.main-container {
    width: 70%;
    float: right;
    margin-right: 100px;
    /* margin: 50px auto; Centers the content horizontally */
    background-color: #f9f9f9;
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

/* Button styles */
.rowkhac.mb10 input[type="button"] {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #2196f3;
    color: white;
    cursor: pointer;
    margin-right: 10px;
    transition: background-color 0.3s ease;
}

.rowkhac.mb10 input[type="button"]:hover {
    background-color: #0b7dda;
}

/* Link button styles */
.rowkhac.mb10 a input[type="button"] {
    background-color: #4caf50;
}

.rowkhac.mb10 a input[type="button"]:hover {
    background-color: #45a049;
}
</style>
<div class="main-container">
<div class="row">
    <div class="row frmtitle">
        <H1>DANH SÁCH KHÁCH HÀNG</H1>
    </div>
    <div class="rowkhac frmcontent">
      
        <div class="rowkhac mb10 frmdsloai">
            
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN KHÁCH HÀNG</th>
                    <th>MẬT KHẨU</th>
                    <th>EMAIL</th>
                    <th>ĐỊA CHỈ</th>
                    <th>ĐIỆN THOẠI</th>
                    <th>VAI TRÒ</th>
                    <th></th>
                </tr>
                <?php
                    $fetch_list_tk= fetch_list_taikhoan();
                    foreach($fetch_list_tk as $listtk){
                        //khai khac data tu bang danhmuc
                        extract($listtk);
                        // action sua va xoa danh muc
                        // $suatk="index.php?act=suatk&id=".$id;
                        $xoatk="index.php?act=xoataikhoan&id=".$id;
                        // <a href="'.$suatk.'"><input type="button" value="Sửa"></a> 

                        echo '<tr>
                                <td>
                                <input type="checkbox" name="" value="' . $id . '">
                                </td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$password.'</td>
                                <td>'.$email.'</td>
                                <td>'.$address.'</td>
                                <td>'.$telephone.'</td>
                                <td>'.$role.'</td>
                                <td>
                                <a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>  
                            </tr>';
                    }   
                ?>
               </table>
               
        </div>
        <div class="rowkhac mb10">
            <input type="button" value="Chọn tất cả" onclick="selectAll()">
            <input type="button" value="Bỏ chọn tất cả" onclick="deselectAll()">
            <input type="button" value="Xóa các mục đã chọn" name="delete" onclick="deleteSelected()">
            <a href="index.php?act=addtk"><input type="button" value="Nhập thêm"></a>
        </div>
        
    </div>
</div>
</div>
