<?php
$url = basename($_SERVER['PHP_SELF']);
?>
<div class="text-right">
    <form action="<?php echo $this->config->config['base_url']; ?>/index.php/news/search" method="post" class="form-inline">
        <input type="text" name="keyword" id="keyword" class="form-control"/>
        <input type="submit" name="Search" id="Search" value="Search" class="btn btn-primary"/>
    </form>
</div>
<div class="container">
    <ul class="nav nav-pills nav-justified">
        <li<?php if($url == "index"){ echo ' class="active"'; }?>>
            <a href="<?php echo $this->config->config['base_url']; ?>/index.php">Home</a>
        </li>
        <li<?php if($url == "search" || $url == "session"){ echo ' class="active"'; }?>>
            <a href="<?php echo $this->config->config['base_url']; ?>/index.php/search">Sport session</a>
        </li>
        <li<?php if($url == "user"){ echo ' class="active"'; }?>>
            <a href="<?php echo $this->config->config['base_url']; ?>/index.php/user">User</a>
        </li>
        <li>
            <a href="<?php echo $this->config->config['base_url']; ?>/index.php/admin">Admin</a>
        </li>
    </ul>
</div>