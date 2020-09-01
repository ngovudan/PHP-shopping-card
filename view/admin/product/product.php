<h4>DANH SÁCH SAN PHAM </h4>
<table class="table table-striped table-condensed">
    <thead>
        <tr>
            <th>Mã sản phẩm</th>
            <th >Tên san phẩm</th>
            <th >Ảnh chính</th>
            <th >Ảnh phụ</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($ds_pro as $sp)
            {
                echo '
                <tr>
                    <td>'.$sp['id'].'</td>
                    <td>'.$sp['name'].'</td>
                    
                    <td>
                        <img src="../assets/images/'.$sp['image_link'].'" width="50px">
                    </td>
                    <td>';
                $anhphu = explode(",",$sp['image_list']);
                foreach ($anhphu as $img) {
                    echo '<img src="../assets/images/'.$img.'" width="50px">';
                }
                echo '</td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                    <button class="btn btn-danger">Edit</button>

                </td>
                </tr>';
            }
        ?>
    </tbody>
</table>
<div class="addnew"><button type="button" class="btn btn-outline-info"><a href="index.php?ctrller=product&act=addnew">Them Moi</a></button></div>
