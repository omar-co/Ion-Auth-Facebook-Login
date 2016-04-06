<!DOCTYPE html>
<html lang="en">
<head>
    <!-- heder -->
    <?php $this->load->view('components/head_view'); ?>
    <!-- header end -->
</head>
<body>
    <!-- content -->
    <?php $this->load->view($view); ?>
    <!-- content end -->

    <!-- footer -->
    <?php $this->load->view('components/footer_view'); ?>
    <!-- footer end -->
</body>
</html>