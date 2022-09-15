<form action="index.php?module=user&action=edit" method="post">
    <input type="hidden" name="userId" value="<?php echo $data['user']['userId']; ?>">
    <label>
        Nom
        <input type="text" name="name" value="<?php echo $data['user']['name']; ?>">
    </label>
    <label>
        username
        <input type="email" name="email" value="<?php echo $data['user']['username']; ?>">
    </label>
    <label>
        Date de naissance
        <input type="date" name="birthday"
            value="<?php echo date_format(date_create($data['user']['birthday']), "Y-m-d") ?>">
    </label>

    <input type="submit">
</form>