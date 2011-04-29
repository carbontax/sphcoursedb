<?php
defined('_JEXEC') or die("Restricted access"); 
?>
<table class="sphcoursedb">
<tr>
<th>Name</th>
<th>Course Number</th>
</tr>
<?php foreach($this->courses as $course){ ?>
<tr>
<td><a href="<?php echo $course->link; ?>"><?php echo $course->name; ?></a></td>
<td><?php echo $course->number; ?></td>
</tr>
<?php }  ?>
</table>