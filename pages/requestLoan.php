<?php require "./forms/searchnumber.form.php" ?>
<?php require "./forms/addclient.form.php" ?>
<script type="text/javascript">
	var urlParams = new URLSearchParams(window.location.search);
	var success = urlParams.get('success');
	if(success == "success=customeradded"){
		alert("Customer Added");
	}
</script>
