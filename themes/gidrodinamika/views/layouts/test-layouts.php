<?php $this->beginContent('//layouts/main'); ?>
<!-- content -->
<section >
    <div class="container">
        <div class="col-xs-12 col-sm-8 col-md-8 ">
            <?= $content; ?>
        </div>
        <div class="col-sm-4 col-md-4 hidden-xs">
            
            <?php $this->widget(
                "application.modules.contentblock.widgets.ContentBlockWidget",
                array("code" => "content-block-1"));
            ?>
            
        </div>
    </div>
    
</section>

<!-- content end-->
<?php $this->endContent(); ?>
