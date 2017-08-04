<?php
/**
 * Created by PhpStorm.
 * User: lokeshkumarjr
 * Date: 04/08/17
 * Time: 1:49 PM
 */  ?>

<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php%20echo%20base_url()%20;%20?>">
                <?php echo $this->lang->line('system_system_name'); ?></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><?php echo anchor('signup', $this->lang->line('nav_home')) ; ?></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<div class="container theme-showcase" role="main">

