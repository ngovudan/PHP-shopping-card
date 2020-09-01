<form action="index.php?ctrller=catalog&act=insertCatalog" method="post" enctype="multipart/form-data">
    <div class="card">
    <div class="card-header">
        Add new catalog
    </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col-md-3">Name:</div>
                        <div class="col-md-6"><input type="text" name="catalogName" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">Description:</div>
                        <div class="col-md-6"><input type="text" name="description" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <button type="submit" class="btn btn-dark">ADD</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>