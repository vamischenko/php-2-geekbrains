<div class="products">
    <div class="breadcrumbs">
        <a href="./">Home</a><span>&nbsp;&gt;&gt;&nbsp;</span><span class="breadcrumbs-active">Register</span>
    </div>
    <form method="POST" class="contact" id="register">
        <p>NAME</p>
	    <p><input type="text" name="name" required></p><br>
        <p>LOGIN</p>
	    <p><input type="text" name="login" required></p><br>
	    <p>PASSWORD</p>
        <p><input type="password" name="password" required></p><br>
        <p>EMAIL</p>
	    <p><input type="email" name="email" required></p><br>
	    <p><input type="submit" name="button" value="Register"></p>
    </form>
    <p id="p_register">Already have an account? <a href="?c=user&act=login">Enter</a></p>
</div>
<div class="clr">
</div>

<?php
if (isset($text))
    echo "<script>alert('$text');document.getElementById('register').style.display = 'none';</script>";
?>