<div class="products">
    <div class="breadcrumbs">
        <a href="./">Home</a><span>&nbsp;&gt;&gt;&nbsp;</span><span class="breadcrumbs-active">Enter</span>
    </div>
    <form method="POST" class="contact" id="auth">
	    <p>LOGIN</p>
	    <p><input type="text" name="login" required></p><br>
	    <p>PASSWORD</p>
	    <p><input type="password" name="password" required></p><br>
	    <p><input type="submit" name="button" value="Enter"></p>
    </form>
    <p id="p_auth">Have no account? <a href="?c=user&act=register">Register</a></p>
</div>
<div class="clr">
</div>

<?php
if (isset($text))
    echo "<script>alert('$text');document.getElementById('auth').style.display = 'none';</script>";
?>