<?php
foreach ($query_fulltext->result() as $row)
			{
      echo "<h2>" . $row->heading . "</h2>";
      echo "<img src='{$this->config->config['base_url']}/images/"
				. $row->images
				. "' class='img-responsive' alt=''/ >";
      echo  "<p>"
      			. $row->fulltext
      			. "</p>";
      }
?>
