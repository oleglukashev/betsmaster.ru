<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Oleg Lukashev CMS</title>
    <meta name="description" content="<?=$meta_description?>">
    <meta name="keywords" content="<?=$meta_keywords?>">

    <?foreach($styles as $src):?>
        <link rel="stylesheet" href="<?=$src;?>" />
    <?endforeach;?>

    <?foreach($scripts as $src):?>
        <script type="text/javascript" src="<?=$src;?>"></script>
    <?endforeach;?>
</head>
<body>
<div id="carcas">
    <div class="wrapper">
        
