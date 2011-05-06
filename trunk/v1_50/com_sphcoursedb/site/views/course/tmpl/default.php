<?php
defined('_JEXEC') or die("Restricted access"); 
?>
<table class="sphcoursedb">
<tr>
<th>Name</th>
<td><?php echo $this->course->name; ?></td>
</tr>
<tr>
<th>Course Number</th>
<td><?php echo $this->course->number; ?></td>
</tr>
<tr>
<th>Instructor</th>
<td><?php echo $this->course->instructor; ?></td>
</tr>
<tr>
<th>Co/Prerequisites</th>
<td><?php echo $this->course->prereqs; ?></td>
</tr>
<tr>
<th>Description</th>
<td><?php echo $this->course->description; ?></td>
</tr>
<tr>
<th>Objectives</th>
<td><?php echo $this->course->objectives; ?></td>
</tr>
<tr>
<th>Course Format</th>
<td><?php echo $this->course->course_format; ?></td>
</tr>
<?php if ( $this->syllabus_link ) { ?>
<tr>
<th>Syllabus Download</th>
<td><?php echo $this->syllabus_link; ?> <br /><?php echo $this->syllabus_details; ?></td>
</tr>
<?php }?>
</table>