<?php

$site_name = ossn_site_settings('site_name');
if (isset($params['title'])) {
    $title = $params['title'] . ' : ' . $site_name;
} else {
    $title = ossn_site_settings('site_name');
}
if (isset($params['contents'])) {
    $contents = $params['contents'];
} else {
    $contents = '';
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo $title; ?></title>
    <?php echo ossn_fetch_extend_views('ossn/admin/head'); ?>

    <script>
        <?php echo ossn_fetch_extend_views('ossn/admin/js/head'); ?>

    </script>
    <script src="<?php echo ossn_site_url(); ?>vendors/tinymce/tinymce.min.js"></script>
    <script src="<?php echo ossn_site_url(); ?>vendors/jquery/jquery.tokeninput.js"></script>

    <script>
        tinymce.init({
            toolbar: "bold italic underline alignleft aligncenter alignright bullist numlist image media link unlink emoticons autoresize fullscreen insertdatetime print spellchecker preview",
            selector: '.ossn-editor',
            plugins: "code image media link emoticons fullscreen insertdatetime print spellchecker preview",
            convert_urls: false,
            relative_urls: false,
            language: "<?php echo ossn_site_settings('language'); ?>",
        });
    </script>

</head>
<body>
<div class="ossn-header">
    <div class="inner">
        <div class="logo-admin"></div>
    </div>
</div>
<?php if (ossn_isAdminLoggedin()) { ?>
    <div class="ossn-admin-topmenu">
        <?php echo ossn_view_menu('topbar_admin'); ?>
    </div>
<?php } ?>
<div class="ossn-admin-body">
    <?php echo $contents; ?>
</div>
<div class="ossn-admin-footer">
    <div class="copyrights">
        <?php echo ossn_print('copyright'); ?> <?php echo date("Y"); ?> <a
            href="<?php echo ossn_site_url(); ?>"><?php echo $site_name; ?></a>
    </div>
    <div class="powered">
        <?php echo 'TÉMA: <a href="https://www.facebook.com/molnarvilmos.hu">MOLNÁR VILMOS</a>'; ?>
    </div>
</div>
<?php echo ossn_fetch_extend_views('ossn/administrator/footer'); ?>

</body>
</html>
