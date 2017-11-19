<?php include "header.php"; ?>

<div id="container">
	<h1>Welcome to Homepage!</h1>

	<div id="body">
	
	<?php
	$this->load->database();
	
	$query = $this->db->query('SELECT * FROM sessions');

	foreach ($query->result() as $row)
	{
			echo $row->title;
	}

	echo 'Total Results: ' . $query->num_rows();
	?>
	
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

<?php include "footer.php"; ?>