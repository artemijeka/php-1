<!-- Подтверждение удаления. -->
<script type="text/javascript">
	function checker()
	{
		if ($('button[name="del_reserve"]')) return confirm("Удалить резерв из базы?");
		else return false;
	}
</script>

<?php 
	$arrayAllInfoAboutReserves = db_get_all_info_about_reserves();
	// echo "<pre>";
	// var_dump($arrayAllInfoAboutReserves);
	// echo "</pre>";
	

	if (isset($_POST['del_reserve']))
	{
		$idOfReserve = $_REQUEST['del_reserve'];
		// var_dump( $idOfReserve );
		db_delete_reserve_by_id($idOfReserve);
		refresh();
	}
	require_once('../admin/control_of_reserves.tpl');
?>
