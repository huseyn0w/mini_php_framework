<?php defined('EXTERNAL_ACCESS') or die('EXTERNAL ACCESS DENIED!'); ?>
    <!-- Bootstrap core JavaScript -->
   <script src="<?php echo CORE_ROOT ?>views/<?php echo CURRENT_TEMPLATE ?>/vendor/jquery/jquery.min.js"></script>
   <script>
        var site_url = "<?php echo HOME_DIR ?>";
        var token = "<?php echo get_current_token() ?>";
   </script>
   <script src="<?php echo CORE_ROOT ?>views/<?php echo CURRENT_TEMPLATE ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="<?php echo CORE_ROOT ?>views/<?php echo CURRENT_TEMPLATE ?>/vendor/main.js"></script>

  </body>

</html>
