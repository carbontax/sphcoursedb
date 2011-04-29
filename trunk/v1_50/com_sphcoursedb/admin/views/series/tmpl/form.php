<?php defined('_JEXEC') or die('Restricted access'); ?>

<form action="index.php" method="post" name="adminForm" id="adminForm">
	<div class="col100">
		<fieldset class="adminform">
			<legend>
			<?php echo JText::_( 'Details' ); ?>
			</legend>
			<table class="admintable">
				<tr>
					<td width="100" align="right" class="key"><label for="name"> <?php echo JText::_( 'Name' ); ?>:
					</label>
					</td>
					<td><input class="text_area" type="text" name="name" id="name"
						size="32" maxlength="250"
						value="<?php echo $this->series->name;?>" />
					</td>
				</tr>
				<tr>
					<td width="100" align="right" class="key"><label for="number"> <?php echo JText::_( 'Description' ); ?>:
					</label>
					</td>
					<td><input class="text_area" type="text" name="number" id="number"
						size="32" maxlength="250"
						value="<?php echo $this->series->description;?>" />
					</td>
				</tr>
			</table>
		</fieldset>
	</div>

	<div class="clr"></div>

	<input type="hidden" name="option" value="com_sphcoursedb" /> <input
		type="hidden" name="id" value="<?php echo $this->series->id; ?>" /> <input
		type="hidden" name="task" value="" /> <input type="hidden"
		name="controller" value="series" />
</form>
