<li>menu</li>
<li><a href="#">about</a></li>
<li><a href="?act=catalog">catalog</a>
</li>
<li><a href="#">surf apparel</a></li>
<li class="sub-menu-open"><a href="#">windsurf</a>
    <ul class="sub-menu windsurf">
        <li><a href="#">kites</a></li>
        <li><a href="#">kiteboards</a></li>
        <li class="sub-sub-menu-open"><a href="#">bags<img src="img/arrow.png" alt="menu-arrow" class="menu-arrow"></a>
            <ul class="sub-sub-menu">
                <li><a href="#">magic kit</a></li>
                <li><a href="#">pro limit s0214</a></li>
            </ul>
        </li>
        <li><a href="#">equipment</a></li>
    </ul>
</li>
<li><a href="#">kitesurf</a></li>
<li><a href="#">accessories</a></li>
<li><a href="sale.php">sale</a></li>
<li><a href="#">brands</a></li>
<li><a href="#">blog</a></li>
<li><a href="#">gadgets</a></li>
<li><a href="?act=contact">contact</a></li>
<?php
if (isset($_SESSION["user_id"]))
    echo '<li><a href="?c=user&act=info">your account</a></li>';
?>