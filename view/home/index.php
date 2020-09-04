<div class="container ">
    <br><h1>alle verjaardagen</h1>

    <table class="table table-hover">
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
                  <td><button href="<?php echo URL ?>home/delete/<?php echo $data["id"] ?>" class="btn btn-danger">delete</button></td>
                  <td><button class="btn btn-success">update</button></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>
