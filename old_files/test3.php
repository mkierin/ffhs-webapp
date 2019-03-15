


<form action="" method="post">
    <input type="submit" name="page" value="Home" />
    <input type="submit" name="page" value="About Us" />
    <input type="submit" name="page" value="Games" />
    <input type="submit" name="page" value="Pages" />
</form>
<?php
    switch($_POST["page"]){
        case "About Us":
            include 'content.php';
            break;
        case "Games":
            include 'content_tv.php';
            break;
        case "Pages":
            include 'footer.php';
            break;
      
    }

    ?>
