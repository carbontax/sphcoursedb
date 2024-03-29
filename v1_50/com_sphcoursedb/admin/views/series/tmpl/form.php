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

<form action="index.php" method="post" name="adminForm" id="adminForm" class="form-validate">
<?php echo JHTML::_('form.token'); ?>
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
					<td><input class="required" type="text" name="name" id="name"
						size="32" maxlength="250"
						value="<?php echo $this->series->name;?>" />
					</td>
				</tr>
				<tr>
					<td width="100" align="right" class="key"><label for="description"> <?php echo JText::_( 'Description' ); ?>:
					</label>
					</td>
					<td><input class="required" type="text" name="description" id="description"
						size="32" maxlength="250"
						value="<?php echo $this->series->description;?>" />
					</td>
				</tr>
				<tr>
					<td width="100" align="right" class="key"><label for="published"> <?php echo JText::_( 'Published' ); ?>:
					</label>
					</td>
					<td><?php echo JHTML::_('select.booleanlist', 'published', 'class="inputbox"', $series->published ); ?>
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
