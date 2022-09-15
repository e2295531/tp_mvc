<form action="index.php?module=post&action=edit" method="post">
    <input type="hidden" name="postId" value="<?php echo $data['post']['postId']; ?>">
    <label>
        titre
        <input type="text" name="title" value="<?php echo $data['post']['title']; ?>">
    </label>
    <label>
        Article <br>
        <textarea name="article" id="" cols="30" rows="10"><?php echo $data['post']['article']; ?></textarea>

    </label>

    <input type="hidden" name="postUserId" value="<?php echo $data['post']['postUserId']; ?>">
    <br>
    <label>
        Date
        <input type="date" name="date" value="<?php echo date_format(date_create($data['post']['date']), "Y-m-d") ?>">
    </label>

    <input type="submit" value="modifier">
</form>