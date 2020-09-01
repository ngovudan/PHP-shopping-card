<h3>Quan ly don hang</h3>
<table class="table">
        <thead>
            <tr>
             <th>Anh</th>
              <th>Ten SP</th>
              <th>So luong</th>
              <th>Gia</th>
              <th>Thanh tien</th>
              
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($newOrder as $r) {
                  echo '
                  <tr>
                    <td>'.$r['id'].'</td>
                    <td>'.$r['full_name'].'</td>
                    <td>'.$r['email'].'</td>
                    <td>'.$r['address'].'</td>
                    <td>'.$r['created_at'].'</td>
                    <td><a href="index.php?ctrller=donhang&act=sendmail&id='.$r['id'].'&email='.$r['email'].'" class="btn btn-danger">Send Mail</a></td>
                  </tr>
                  ';
                }
            ?>
        </tbody>
    </table>