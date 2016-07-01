<center>
<h1>Form Edit</h1>
<!--form to crate user-->
<form method="post" action="<?php echo URL;?>user/editSave/<?php echo ($this->edit['id']);?>" >
<label>name</label><input type="text" name="name" value="<?php echo ($this->edit['name']);?>">       <br>
<label>password</label><input type="text" name="password"><br>
<select name="role">
<option value="<?php if ($this->edit['role']=="default") echo 'selected';?>">Default</option>
<option value="<?php if ($this->edit['role']=="admin" )echo 'selected';?>"> Admin</option>
<option value="<?php if ($this->edit['role']=="owner" )echo 'selected';?>"> Owner</option>

</select>
<label>&nbsp;</label><input type="submit" value="update">
</form>