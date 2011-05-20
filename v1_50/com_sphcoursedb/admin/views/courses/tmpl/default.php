<?php defined('_JEXEC') or die('Restricted access'); ?>
<form action="index.php" method="post" name="adminForm">
	<div id="editcell">
		<table class="adminlist">
			<thead>
				<tr>
					<th width="5"><?php echo JText::_( 'ID' ); ?>
					</th>
					<th width="20"><input type="checkbox" name="toggle" value=""
						onclick="checkAll(<?php echo count( $this->items ); ?>);" />
					</th>
					<th><?php echo JText::_( 'Course Number' ); ?>
					</th>
					<th><?php echo JText::_( 'Course Name' ); ?>
					</th>
					<th><?php echo JText::_( 'Series' ); ?>
					</th>
					<th><?php echo JText::_( 'Published' ); ?>
					</th>
				</tr>
			</thead>
			<?php
			$k = 0;
			for ($i=0, $n=count( $this->items ); $i < $n; $i++)
			{
				$row =& $this->items[$i];
				$checked    = JHTML::_( 'grid.id', $i, $row->id );
				$link = JRoute::_( 'index.php?option=com_sphcoursedb&controller=course&task=edit&cid[]='. $row->id );
				$series_link = JRoute::_( 'index.php?option=com_sphcoursedb&controller=series&task=edit&cid[]='. $row->series_id );
				$published 	= JHTML::_('grid.published', $row, $i );
				?>
			<tr class="<?php echo "row$k"; ?>">
				<td><?php echo $row->id; ?>
				</td>
				<td><?php echo $checked; ?>
				</td>
				<td><a href="<?php echo $link; ?>"><?php echo $row->course_number; ?>
				</a>
				</td>
				<td><?php echo $row->course_name; ?>
				</td>
				<td><a href="<?php echo $series_link; ?>"><?php echo $row->series_name; ?>
				</a>
				</td>
				<td align="center"><?php echo $published;?>
				</td>
			</tr>
			<?php
			$k = 1 - $k;
			}
			?>
		</table>
	</div>

	<input type="hidden" name="option" value="com_sphcoursedb" /> <input
		type="hidden" name="task" value="" /> <input type="hidden"
		name="boxchecked" value="0" /> <input type="hidden" name="controller"
		value="course" />
	<?php echo JHTML::_( 'form.token' ); ?>

</form>
