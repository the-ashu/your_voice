<DOCTYPE! HTML>
<html>
<head>
    <title>Your_voice</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-default ">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">Your_Voice</a>
        </div>
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="<?php echo base_url(); ?>about">About</a></li>
                <li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
                <li><a href="<?php echo base_url(); ?>categories">Categories</a></li>
            </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php if(!$this->session->userdata('logged_in')) :?>
            <li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
            <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
            <?php endif;?>
            <?php if($this->session->userdata('logged_in')):?>
            <li><a href="<?php echo base_url(); ?>posts/create">Create Posts</a></li>
            <li><a href="<?php echo base_url(); ?>categories/create">Create Categories</a></li>
            <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
            <?php endif;?>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="container">
        <!-- Flash messages -->
        <?php if($this->session->flashdata('user_registered')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('post_created')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('post_updated')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('category_created')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('post_deleted')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('login_failed')): ?>
            <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
<?php endif; ?>