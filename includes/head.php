<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="utf-8">
<title><?php echo htmlspecialchars($page_title ?? 'João Saveia'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="<?php echo htmlspecialchars($page_description ?? ''); ?>" />
<meta name="author" content="" />

<!-- favicon -->
<link href="img/logosaveia.png" rel="icon">
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link href="css/magnific-popup.css" rel="stylesheet">
<link href="css/gallery-1.css" rel="stylesheet">
<?php if (!empty($extra_css)): foreach ($extra_css as $css): ?>
<link rel="stylesheet" href="<?php echo htmlspecialchars($css); ?>">
<?php endforeach; endif; ?>
<?php if (!empty($extra_head_html)) echo $extra_head_html; ?>
</head>
