<?php defined('_JEXEC') or die('Restricted access');

JToolBarHelper::title( JText::_( 'SPH Course Series List' ), 'generic.png' );
JToolBarHelper::publishList();
JToolBarHelper::unpublishList();
JToolBarHelper::deleteList();
JToolBarHelper::editListX();
JToolBarHelper::addNewX();

?>


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
					<th><?php echo JText::_( 'Series Name' ); ?>
					</th>
					<th><?php echo JText::_( 'Description' ); ?>
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
				$published 	= JHTML::_('grid.published', $row, $i );

				$link = JRoute::_( 'index.php?option=com_sphcoursedb&controller=series&task=edit&cid[]='. $row->id );

				?>
			<tr class="<?php echo "row$k"; ?>">
				<td><?php echo $row->id; ?>
				</td>
				<td><?php echo $checked; ?>
				</td>
				<td><a href="<?php echo $link; ?>"><?php echo $row->name; ?> </a>
				</td>
				<td><a href="<?php echo $link; ?>"><?php echo $row->description; ?>
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
		value="series" />
		<?php echo JHTML::_( 'form.token' ); ?>

</form>
