<?php
$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('cake.css') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        <?= $this->Flash->render() ?>
        <div class="container clearfix">
            <div class="users form large-9 medium-8 columns content" style="margin: 0 auto;">
                <?php echo $this->Form->create(NULL, array('data-toggle' => "validator")) ?>
                <div class="form-group has-feedback">
                    <?= $this->Form->input('email', ['type' => 'email', 'class' => 'form-control', 'required' => 'required']) ?>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group has-feedback">
                    <?= $this->Form->input('password', ['type' => 'password', 'class' => 'form-control', 'required' => 'required']) ?>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="row">  
                    <div class="col-xs-4">            
                        <?= $this->Form->submit('Login', ['type' => 'submit', 'class' => 'btn btn-primary btn-block btn-flat']) ?>
                    </div><!-- /.col -->
                </div>
                <?php echo $this->Form->end(); ?>  
            </div>

        </div>
        <footer>
        </footer>
    </body>
</html>

