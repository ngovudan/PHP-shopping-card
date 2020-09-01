<form action="index.php?ctrller=sanpham&act=insert" method="post" enctype="multipart/form-data">
<div class="card">
    <div class="card-header">
        Add new product
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="row form-group">
                    <div class="col-md-3">Name:</div>
                    <div class="col-md-6"><input type="text" name="name" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col-md-3"><label>Parent ID</label></div>
                    <div class="col-md-6">
                        <select name="id_catalog">
                            <?php
                                foreach ($ds_cate as $r) {
                                    echo '<option value="'.$r["id"].'">'.$r["name"].'</option>';
                                }
                            ?>
                        </select>
                    </div>      
                </div>
                <div class="row form-group">
                    <div class="col-md-3">Content:</div>
                    <div class="col-md-9"><input type="text" name="content" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col-md-3">Price:</div>
                    <div class="col-md-6"><input type="text" name="price" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col-md-3">View:</div>
                    <div class="col-md-6"><input type="text" name="view" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col-md-3">Buyed:</div>
                    <div class="col-md-6"><input type="text" name="buyed" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col-md-3">Rate_total:</div>
                    <div class="col-md-6"><input type="text" name="rate_total" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col-md-3">rate_count:</div>
                    <div class="col-md-6"><input type="text" name="rate_count" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col-md-3">Anh chinh</div>
                    <div class="col-md-6"><input type="file" name="productImage"></div>
                </div>
                <div class="row form-group">
                    <div class="col-md-3">Anh phu</div>
                    <div class="col-md-6"><input type="file" name="listImages[]" multiple></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <button type="submit" class='btn btn-success'>Insert product</button>
</form>