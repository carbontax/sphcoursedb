<?php
defined('_JEXEC') or die("Restricted access"); 
?>
<h3>
Series: <?php echo $this->series->name; ?>
</h3>

<UL>
<?php foreach ($this->courses as $course ) { ?>
<LI><?php echo $course->name; ?> (<?php echo $course->number; ?>)</LI>
<?php } ?>
</UL>