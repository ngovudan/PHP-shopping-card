<div class="card">
  <div class="card-header">
    List products
  </div>
  <div class="card-body">
      <div class="row search">
          <div class='col-md-12'>
            <form action="index.php?ctrller=products&act=search" method="post">
            <div class="row">
              <input type='text' name="txtSearch" class="form-control col-11"/>
              <button type="submit" class="btn btn-primary col-1">Search</button>
              </div>
            </form>
          </div>
      </div>
      <table class=" table">
        <thead>
            <tr>
                <th>ID Catalog</th>
                <th>Name</th>
                <th>Action </th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($listcate as $cate) {
                echo '
                <tr>
                    <td>'.$cate['id'].'</td>
                    <td>'.$cate['name'].'</td>
                    <td>
                    <button type="button" class="btn btn-outline-info"><a href="index.php?ctrller=catalog&act=delete&id='.$cate['id'].'">Delete</a></button>
                    <button type="button" class="btn btn-outline-info"><a href="index.php?ctrller=catalog&act=edit&id='.$cate['id'].'">Edit</a></button>
                    </td>
                </tr>
                ';
            }
        ?>
        </tbody>
    </table>   
  </div>
</div>

<div class="addnew"><button type="button" class="btn btn-outline-info"><a href="index.php?ctrller=catalog&act=addnew">Them Moi</a></button></div>
