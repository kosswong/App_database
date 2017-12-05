<?php
foreach ($query_listing->result() as $row)
			{
      echo  "<p>"
      			. '<a href="'
						. $this->config->config['base_url']
						. "/index.php/news/fulltext/"
      			. $row->id
      			. '" />'
      			. $row->heading
      			. "</a></p>";
      }
?>
