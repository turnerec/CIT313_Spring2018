<?php include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1> the Login View </h1>
        <?php if($login_error){?>
            <div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo $login_error?>
            </div>
        <?php }?>
        <form id ="form" action="<?php echo BASE_URL?>login/do_login" method="post" onsubmit="editor.post()">
            <label>Email</label>
            <input type="email" class="span6" name="email" placeholder="jdoe@gmail.com">
            <br>
            <label>Password</label>
            <input type="password" class="span6" name="password">
            <br>
            <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
        </form>
  </div>
</div>
<?php include('views/elements/footer.php');?>

