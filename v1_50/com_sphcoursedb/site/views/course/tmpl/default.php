<?php
defined('_JEXEC') or die("Restricted access");
if ( ! $this->course->id ) {
	echo "<p>No course was found.</p>";
} else {
?>
<table class="sphcoursedb">
	<tr>
		<th>Name</th>
		<td><?php echo $this->course->name; ?></td>
	</tr>
	<tr>
		<th>Course Number</th>
		<td><?php echo $this->course->number; ?> <?php echo $this->course->designation; ?></td>
	</tr>
	<tr>
		<th>Instructor</th>
		<td><?php 
		if ($this->coordinator->id) {
			echo "Coordinator: " .  $this->coordinator->link . "<br />";
		}
		if (count($this->instructors)) {
			echo "Instructors: ";
			foreach ($this->instructors as $instructor) {
				echo $instructor->link . "<br />";
			}
		}
		echo $this->course->instructor_details; ?>
		</td>
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
		<td><?php echo $this->syllabus_link; ?> <br /> <?php echo $this->syllabus_details; ?>
		</td>
	</tr>
	<?php }?>
</table>
<?php } //end else 
