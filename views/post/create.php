<div class="container">

    <form action="index.php?module=post&action=insert" method="post">
        <label>
            titre
            <input type="text" name="title">
        </label>
        <label>
            Article <br>
            <textarea name="article" id="" cols="30" rows="10"></textarea>

        </label>
        <br>
        <label>
            date
            <input type="date" name="date">
        </label>


        <input type="hidden" name="postUserId" value="<?php echo  $_SESSION['userId'] ?> ">

        <input type="submit" value="créer un post">
    </form>

</div>