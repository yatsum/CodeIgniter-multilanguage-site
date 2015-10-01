<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <h1>Say Hi! From Sky!</h1>
                <?php echo form_open();?>
                <div class="form-group">
                    <?php
                        echo form_label('I have token', 'token');
                        echo form_error('token');
                        echo form_input('token', set_value('token'), 'class="form-control"');
                    ?>
                </div>
                <?php echo form_submit('submit', 'Validate', 'class="btn btn-primary btn-lg btn-block"');?>
                <?php echo form_close();?>
                <p class="text-center"> --- OR --- </p>
                <?php echo anchor('purchase', 'Use Credit Card / Big Clicks', 'class="btn btn-lg btn-success btn-block"');?>
            </div>
        </div>
    </div>
</div>

<?php
    //echo "Debug";

    //echo '<pre>';
    //echo $this->lang->line('homepage_welcome');

   // echo '<br />'.$current_lang['slug'];
    ////echo '<br />hello';
   // print_r($langs);
    //echo '</pre>';
?>
