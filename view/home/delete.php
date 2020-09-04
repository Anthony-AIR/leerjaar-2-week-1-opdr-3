<div class="alert alert-dark" role="alert">
    <strong>delete</strong> weet je zeker dat je deze user wilt verwijderen?
</div>
<form  action="<?php echo URL ?>home/destroy/<?php echo $id ?>">
    <button class="btn btn-danger" type="submit">delete</button>
    <a class="btn btn-secondary" href="<?php echo URL ?>home/index/">annuleren</a>
</form>