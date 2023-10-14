<html>

<?php
if (isset($_GET['title'])) ?>
<meta property="og:title" content="<?php echo ($_GET['title']); ?>" />
<?php
if (isset($_GET['url'])) ?>
<meta property="og:url" content="<?php echo ($_GET['url']); ?>" />
<?php
if (isset($_GET['image'])) ?>
<meta property="og:image" content="<?php echo ($_GET['image']); ?>" />
<?php
if (isset($_GET['description'])) ?>
<meta property="og:description" content="<?php echo ($_GET['description']); ?>" />
<meta name="theme-color" content="#<?php if ($_GET['color']) {
                                        echo ($_GET['color']);
                                    } else {
                                        echo "2b2d31";
                                    } ?>">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@<?php echo ($_GET['title']); ?>">
<meta name="twitter:title" content="<?php echo ($_GET['title']); ?>">
<meta name="twitter:description" content="<?php echo ($_GET['description']); ?>">