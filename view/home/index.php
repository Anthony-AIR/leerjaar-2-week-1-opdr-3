<div class="container ">
    <br><h1>alle verjaardagen</h1>

    <table class="table table-hover">
        <thead>
          <tr>
            <th></th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>birthday</th>
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
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>
