<?php defined('_JEXEC') or die('Restricted access'); ?>

<form action="index.php" method="post" name="adminForm" id="adminForm">
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
					<td><input class="text_area" type="text" name="number" id="number"
						size="32" maxlength="250"
						value="<?php echo $this->course->number;?>" />
					</td>
				</tr>
				<tr>
					<td width="100" align="right" class="key"><label for="name"> <?php echo JText::_( 'Name' ); ?>:
					</label>
					</td>
					<td><input class="text_area" type="text" name="name" id="name"
						size="32" maxlength="250"
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
					<td width="100" align="right" class="key"><label for="instructor">
					<?php echo JText::_( 'Instructor' ); ?>: </label>
					</td>
					<td><?php 
					$editor =& JFactory::getEditor();
					echo $editor->display('instructor', $this->course->instructor, '550', '75', '60', '20', false);
					?>
					</td>
				</tr>
				<tr>
					<td width="100" align="right" class="key"><label
						for="prerequisites"> <?php echo JText::_( 'Co/Prerequisites' ); ?>:
					</label>
					</td>
					<td><?php 
					$editor =& JFactory::getEditor();
					echo $editor->display('prerequisites', $this->course->prerequisites, '550', '200', '60', '20', false);
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

			</table>
		</fieldset>
	</div>

	<div class="clr"></div>

	<input type="hidden" name="option" value="com_sphcoursedb" /> 
	<input type="hidden" name="id" value="<?php echo $this->course->id; ?>" /> 
	<input type="hidden" name="task" value="" /> 
	<input type="hidden" name="controller" value="course" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>