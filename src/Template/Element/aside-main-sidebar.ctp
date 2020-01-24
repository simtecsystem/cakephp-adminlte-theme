<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="/pages/index" class="brand-link">
        <?=$this->Html->image('AdminLTELogo.png', ['class' => 'brand-image img-circle elevation-3', 'style' => "opacity: .8", 'alt' => 'AdminLTE Logo'])?>
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <div class="sidebar">
        <!-- Sidebar user panel -->
        <?php echo $this->element('AdminLTE.aside/user-panel'); ?>

        <!-- search form -->
        <?php echo $this->element('AdminLTE.aside/form'); ?>
        <!-- /.search form -->

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php echo $this->element('AdminLTE.aside/sidebar-menu'); ?>
    </div>

</aside>