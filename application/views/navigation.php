<ul class="nav nav-tabs">
    <?php
    if (!isset($active_category))
        echo '<li role="presentation" class="active">';
    else
        echo '<li role="presentation">';
    ?>
    <a href="<?php echo $this->config->config['base_url']; ?>/index.php/news/"><span
                class="glyphicon glyphicon-home"></span>&nbsp;Home</a>
    </li>

    <?php
    foreach ($query_categories->result() as $row) {
        if (isset($active_category) && $active_category == $row->id)
            echo '<li role="presentation" class="active">';
        else
            echo '<li role="presentation">';
        echo '<a href="'
            . $this->config->config['base_url']
            . "/index.php/news/listing/"
            . $row->id
            . '">'
            . $row->category
            . '</a>'
            . "</li>";
    }
    ?>
</ul>

<div class="container">
    <ul class="nav nav-pills nav-justified">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Search</a></li>
        <li><a href="#">My booking</a></li>
        <li><a href="#">Login/Logout</a></li>
    </ul>
</div>

<br>
<form action="<?php echo $this->config->config['base_url']; ?>/index.php/news/search" method="post" class="form-inline">
    <input type="text" name="keyword" id="keyword" class="form-control"/>
    <input type="submit" name="Search" id="Search" value="Submit" class="btn btn-primary"/>
</form>
<br>
