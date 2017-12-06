<div class="card">
    <div class="header">
        <h4 class="title">Message</h4>
    </div>
    <div class="content">
        <p class="description"><?php echo $message; ?></p>
        <?php if(isset($important)){ ?>
            <p class="description"><?php echo $important; ?></p>
        <?php } ?>
        <div class="text-center">
            <?php if(isset($important)){ ?>
                <a href="javascript:window.print()" class="btn btn-warning btn-fill btn-wd" role="button">
                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print it</a>
            <?php } ?>
            <a href="<?php echo $this->config->config['base_url']; ?>/index.php/search" class="btn btn-info btn-fill btn-wd" role="button">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> See other sport session</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>