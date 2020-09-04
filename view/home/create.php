<form method="post" action="<?php echo URL ?>home/store" style="position: absolute; top:150px; left:470px; width:500px;">
    <h2 style="position: absolute; top:0px; left:100px;">new user</h2><br><br>
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">name</label>
        <div class="col-sm-10">
            <input type="name" name="name" placeholder="name">
        </div>
    </div>
    <div class="form-group row">
        <label for="lastName" class="col-sm-2 col-form-label">lastName</label>
        <div class="col-sm-10">
            <input type="lastName" name="lastName" placeholder="last name">
        </div>
    </div>
    <div class="form-group row">
        <label for="geboorteDatum" class="col-sm-2 col-form-label">birthday</label>
        <div class="col-sm-10">
            <input type="text" name="geboorteDatum" placeholder="jjjj-mm-dd">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </div>
</form>