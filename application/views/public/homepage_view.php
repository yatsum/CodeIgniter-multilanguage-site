<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <h1><?php echo lang('homepage_welcome') ?></h1>
                <?php echo form_open('token/validate', array('id' => 'token-form'));?>
                <div class="form-group">
                    <?php
                        echo form_error('token');
                        echo form_input('token', set_value('token'), 'class="form-control input-lg" placeholder="Enter Token"');
                    ?>
                </div>
                <?php echo form_button(array('id' => 'submit-button', 'content' => 'Validate', 'class' => 'btn btn-primary btn-lg btn-block'));?>
                <?php echo form_close();?>
                <p class="text-center"> --- OR --- </p>
                <?php echo anchor('purchase', 'Use Credit Card / Big Clicks', 'class="btn btn-lg btn-success btn-block"');?>
            </div>
        </div>
    </div>
</div>



<!--  wait and loading  -->
  <div class="modal fade" id="modal-wait" tabIndex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <p class="lead">
           <?php echo lang('homepage_wait') ?>
          </p>
        </div>
      </div>
    </div>
  </div>



<?php if ($this->session->flashdata('error')): ?>
<!--  error popup  -->
    <div class="modal fade" id="modal-error" tabIndex="-1">
        <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Oops!</h4>
                </div>
                <div class="modal-body">
                  <p class="lead">
                    <?php echo $this->session->flashdata('error');?>
                  </p>
                </div>
              </div>
        </div>
    </div>
    <script type="text/javascript">
    
        $('#modal-error').modal('show'); 
    </script>

<?php endif; ?>

<script type="text/javascript">
    $('#submit-button').click(function () {
        $('#modal-wait').modal('show'); 
        $('#token-form').submit();
    });
</script>

