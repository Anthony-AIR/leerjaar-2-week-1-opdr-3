<?php foreach($birthday as $data){ ?>
    <form method="post" action="<?php echo URL ?>home/edit/<?php echo $data["id"] ?>" style="position: absolute; top:150px; left:470px; width:500px;">
        <h2 style="position: absolute; top:0px; left:100px;">new user</h2><br><br>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">name</label>
            <div class="col-sm-10">
                <input type="name" name="name" value="<?php echo $data["name"]?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="lastName" class="col-sm-2 col-form-label">lastName</label>
            <div class="col-sm-10">
                <input type="lastName" name="lastName" value="<?php echo $data["lastName"]?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="geboorteDatum" class="col-sm-2 col-form-label">birthday</label>
            <div class="col-sm-10">
                <input type="text" name="geboorteDatum" value="<?php echo $data["geboorteDatum"]?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">update</button>
            </div>
        </div>
<?php } ?>
    </form>
