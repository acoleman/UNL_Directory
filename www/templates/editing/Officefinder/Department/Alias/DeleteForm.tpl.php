<a href="#" onclick="if (confirm('Are you sure? This will delete the alias.')) document.getElementById('deletealias_<?php echo $context->department_id.$context->name; ?>').submit();">Delete</a>
<form action="<?php echo $parent->parent->context->getURL(); ?>" method="post" id="deletealias_<?php echo $context->department_id.$context->name; ?>" style="width:120px;">
    <input type="hidden" name="_type" value="delete_dept_alias" />
    <input type="hidden" name="department_id" value="<?php echo $context->department_id; ?>" />
    <input type="hidden" name="name" value="<?php echo $context->name; ?>" />
</form>