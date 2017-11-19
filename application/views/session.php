<?php include "header.php"; ?>
	
    <div class="container" style="margin-top:20px;">
      <div class="jumbotron">
        <h1>Search session</h1>
        
		
		
		
	<?php
	$this->load->database();
	
	$query = $this->db->query('SELECT * FROM sessions');

	foreach ($query->result() as $row)
	{
		?>
		
		<?php echo $row->title; ?>
		<br>
			
			<?php
	}

	echo 'Total Results: ' . $query->num_rows();
	?>

		</div>
		<table class="table table-sm">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    </div>

<?php include "footer.php"; ?>