<?php
defined('_JEXEC') or die("Restricted access"); 
?>
<H2><?php echo $this->series->name ?> Courses</H2>
<?php if ( count($this->courses) == 0 ) {?>
<div class="sphcoursedb">There are currently no active courses in this series.</div>
<?php } else { ?>

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
<?php } // end if (count($this->courses ?>