<form method="get" id="form1" action="<?php echo htmlentities(str_replace('index.php', '', $_SERVER['PHP_SELF']), ENT_QUOTES); ?>">
<fieldset>
	<legend>Search for students, faculty, staff and departments.</legend>
<ol>
	<li>
	<label for="q" id="queryString">Enter a name to begin your search.</label> 
    <?php if (isset($_GET['chooser'])) {
    	echo '<input type="hidden" name="chooser" value="true" />';
    }
    if (isset($_GET['q'])) {
        $default = htmlentities($_GET['q'], ENT_QUOTES);
    } else {
        $default = '';
    }
    ?>
	<input type="text" value="<?php echo $default; ?>" id="q" name="q" />
	<input name="submitbutton" type="image" src="images/formSearch.png" value="Submit" id="submitbutton" />
	</li>
	<li id="filters">
		<fieldset>
		<span>Filters:</span>
		<ol>
			<li><input type="checkbox" checked="checked" id="filterStudents" name="filterStudents" value="1" /><label for="filterStudents">Students</label></li>
			<li><input type="checkbox" checked="checked" id="fitlerFaculty" name="fitlerFaculty" value="1" /><label for="fitlerFaculty">Faculty</label></li>
			<li><input type="checkbox" checked="checked" id="fitlerStaff" name="fitlerStaff" value="1" /><label for="fitlerStaff">Staff</label></li>
			<li><input type="checkbox" checked="checked" id="fitlerDepartments" name="fitlerDepartments" value="1" /><label for="fitlerDepartments">Departments</label></li>
		</ol>
		</fieldset>
	</li>
</ol>
</fieldset>
</form>