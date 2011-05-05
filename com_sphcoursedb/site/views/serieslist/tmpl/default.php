<?php defined('_JEXEC') or die('Restricted access'); ?>
<div id="sphcoursedb-serieslist">
<?php
$k = 0;
for ($i=0, $n=count( $this->items ); $i < $n; $i++)
{
	$row =& $this->items[$i];
	$link = JRoute::_( 'index.php?option=com_sphcoursedb&controller=series&cid[]='. $row->id );
	?>
	<div class="<?php echo "row$k"; ?>">
		<div><a href="<?php echo $link; ?>"><?php echo $row->name; ?> </a>
		</div>
		<div><?php echo $row->description; ?>
		</div>
	</div>
	<?php
	$k = 1 - $k;
}
?>
</div>