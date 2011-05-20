<?php
defined('_JEXEC') or die("Restricted access"); 
?>
<?php if ( count($this->items) == 0 ) {?>
<div class="sphcoursedb">There are no active courses in the Series.</div>
<?php } else { ?>

<H2><?php echo $this->items[0]->series_name ?> Courses</H2>

<table class="sphcoursedb">
<tr>
<th>Name</th>
<th>Course Number</th>
</tr>
<?php foreach($this->items as $course){ ?>
<tr>
<td><a href="<?php echo $course->course_link; ?>"><?php echo $course->course_name; ?></a></td>
<td><?php echo $course->course_number; ?></td>
</tr>
<?php }  ?>
</table>
<?php } // end if (count($this->courses ?>