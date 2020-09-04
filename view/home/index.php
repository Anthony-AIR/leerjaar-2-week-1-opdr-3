<div class="container ">
    <br><h1>alle verjaardagen</h1>

    <table class="table table-hover" style="margin-bottom:100px;">
        <thead>
          <tr>
            <th></th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>birthday</th>
            <th>delete</th>
            <th>update</th>
          </tr>
        </thead>
        <tbody>
            <?php
                foreach($birthday as $data){
            ?>
                <tr>
                  <th scope="row"><?php echo $data["id"]?></th>
                  <td><?php echo $data["name"]?></td>
                  <td><?php echo $data["lastName"]?></td>
                  <td><?php echo $data["geboorteDatum"]?></td>
                  <td><a class="btn btn-danger" href="<?php echo URL ?>home/delete/<?php echo $data["id"] ?>">delete</a></td>
                  <td><a class="btn btn-success" href="<?php echo URL ?>home/update/<?php echo $data["id"] ?>">update</a></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>
