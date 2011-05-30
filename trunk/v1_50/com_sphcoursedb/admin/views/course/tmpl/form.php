<?php defined('_JEXEC') or die('Restricted access');
JHTML::_('behavior.formvalidation');
?>
<script language="javascript" type="text/javascript">
<!--
   function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancel') {
         form.task.value = pressbutton;
         form.submit();
      }
      else if (document.formvalidator.isValid(form)) {
        form.task.value = pressbutton;
         form.submit();
      }
      else {
         alert('<?php echo JText::_('Fields highlighted in red are required.'); ?>');
      }
   }
//-->
</script>

<form action="index.php" method="post" name="adminForm" id="adminForm"
	class="form-validate" enctype="multipart/form-data">
	<div class="col100">
		<fieldset class="adminform">
			<legend>
			<?php echo JText::_( 'Details' ); ?>
			</legend>
			<table class="admintable">
				<tr>
					<td width="100" align="right" class="key"><label for="number"> <?php echo JText::_( 'Number' ); ?>:
					</label>
					</td>
					<td><input class="text_area required" type="text" name="number"
						id="number" size="32" maxlength="250"
						value="<?php echo $this->course->number;?>" />
					</td>
				</tr>
				<tr>
					<td width="100" align="right" class="key"><label for="designation"> <?php echo JText::_( 'Designation' ); ?>:
					</label>
					</td>
					<td><?php echo $this->select_designation; ?>
					</td>
				</tr>
				<tr>
					<td width="100" align="right" class="key"><label for="name"> <?php echo JText::_( 'Name' ); ?>:
					</label>
					</td>
					<td><input class="text_area required" type="text" name="name"
						id="name" size="32" maxlength="250"
						value="<?php echo $this->course->name;?>" />
					</td>
				</tr>
				<tr>
					<td width="100" align="right" class="key"><label for="series_id"> <?php echo JText::_( 'Series' ); ?>:
					</label>
					</td>
					<td><?php echo $this->select_series; ?>
					</td>
				</tr>
				<tr>
					<td width="100" align="right" class="key"><label
						for="coordinator_id"> <?php echo JText::_( 'Coordinator' ); ?>: </label>
					</td>
					<td><?php echo $this->select_coordinator; ?>
					</td>
				</tr>
				<tr>
					<td width="100" align="right" class="key"><label for="instructors">
					<?php echo JText::_( 'Instructors' ); ?>: </label>
					</td>
					<td><?php echo $this->select_instructors; ?>
					</td>
				</tr>
				<tr>
					<td width="100" align="right" class="key"><label
						for="instructor_details"> <?php echo JText::_( 'Instructor Details' ); ?>:
					</label>
					</td>
					<td><?php 
					$editor =& JFactory::getEditor();
					echo $editor->display('instructor_details', $this->course->instructor_details, '550', '75', '60', '20', false);
					?>
					</td>
				</tr>
				<tr>
					<td width="100" align="right" class="key"><label for="prereqs"> <?php echo JText::_( 'Co/Prerequisites' ); ?>:
					</label>
					</td>
					<td><?php 
					$editor =& JFactory::getEditor();
					echo $editor->display('prereqs', $this->course->prereqs, '550', '200', '60', '20', false);
					?>
				
				</tr>
				<tr>
					<td width="100" align="right" class="key"><label for="description">
					<?php echo JText::_( 'Description' ); ?>: </label>
					</td>
					<td><?php 
					$editor =& JFactory::getEditor();
					echo $editor->display('description', $this->course->description, '550', '400', '60', '20', false);
					?>
				
				</tr>
				<tr>
					<td width="100" align="right" class="key"><label for="objectives">
					<?php echo JText::_( 'Objectives' ); ?>: </label>
					</td>
					<td><?php 
					$editor =& JFactory::getEditor();
					echo $editor->display('objectives', $this->course->objectives, '550', '200', '60', '20', false);
					?>
				
				</tr>
				<tr>
					<td width="100" align="right" class="key"><label
						for="course_format"> <?php echo JText::_( 'Course Format' ); ?>: </label>
					</td>
					<td><?php 
					$editor =& JFactory::getEditor();
					echo $editor->display('course_format', $this->course->course_format, '550', '100', '60', '20', false);
					?>	
				</tr>
				<tr>
					<td width="100" align="right" class="key"><label for="published"> <?php echo JText::_( 'Published' ); ?>:
					</label>
					</td>
					<td><?php echo JHTML::_('select.booleanlist', 'published', 'class="inputbox"', $this->course->published ); ?>
					</td>
				</tr>
			</table>
		</fieldset>
		<fieldset>
			<legend>Syllabus Upload</legend>
			<table>
				<tr>
					<td width="100" align="right" class="key"><label> <?php echo JText::_( 'Current Syllabus File' ); ?>:
					</label>
					</td>
					<td><?php echo $this->syllabus_link; ?> <?php echo $this->syllabus_details; ?>
					</td>
				</tr>
				<tr>
					<td width="100" align="right" class="key"><label for="file_upload">
					<?php echo JText::_( 'Upload Syllabus' ); ?>: </label>
					</td>
					<td><input type="hidden" name="MAX_FILE_SIZE" value="2000000" /> <input
						class="file_upload" type="file" name="file_upload" /></td>
				</tr>
			</table>
		</fieldset>
	</div>

	<div class="clr"></div>

	<input type="hidden" name="option" value="com_sphcoursedb" /> <input
		type="hidden" name="id" value="<?php echo $this->course->id; ?>" /> <input
		type="hidden" name="task" value="" /> <input type="hidden"
		name="controller" value="course" />
		<?php echo JHTML::_( 'form.token' ); ?>
</form>
