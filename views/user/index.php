<center>
<h1>User</h1>
<h4>Form Create</h4>
<!--form to crate user-->
<form method="post" action="<?php echo URL;?>user/create" >
<label>name</label><input type="text" name="name">       <br>
<label>password</label><input type="text" name="password"><br>
<select name="role">
<option value="default">Default</option>
<option value="admin"> Admin</option>
</select>
<label>&nbsp;</label><input type="submit">
</form>
<hr style=" height: 2px; border: none; background:#87CEFA; width: 100%;"/>
<table>
<?php
foreach ($this->userList as $key => $value) {
	echo "<tr>";
	echo"<td>".$value['id']."</td>";
	echo"<td>&nbsp;&nbsp;".$value['name']."</td>";
	echo"<td>&nbsp;&nbsp;".$value['role']."</td> ";
	echo'<td>
	&nbsp;&nbsp;<a href="'.URL.'user/edit/'.$value['id'].'">Edit</a> 
	&nbsp;&nbsp;<a href="'.URL.'user/delete/'.$value['id'].'">Delete</a></td>';
	echo "</tr>";
}

?>

</table>
</center>

