<table class='listing'>
    <thead>
        <tr>
            <th>titre</th>
            <th>Article</th>
            <th>date</th>
            <th>auteur</th>
            <th>editer</th>
            <th>Effacer</th>
        </tr>
        <thead>
        <tbody>
            <?php foreach ($data as $row) {
                $iduser = $_SESSION['userId'];
                if ($row['postUserId'] === $iduser) {


            ?>
            <tr>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['article'] ?></td>
                <td><?php echo date_format(date_create($row['date']), "Y/m/d") ?></td>

                <td><?php echo $row['name'] ?></td>
                <td><a href="?module=post&action=view&id=<?php echo $row['postId']; ?>">modifier</a></td>
                <td>
                    <form action="?module=post&action=delete" method="post"><input type="hidden" name="postId"
                            value="<?php echo $row['postId'] ?>"><input type="submit" Value="Effacer"></form>
                </td>
            </tr>
            <?php }
            } ?>
    <tbody>
</table>