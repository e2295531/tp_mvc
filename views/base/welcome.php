<h1>forum</h1>

<?php foreach ($data as $row) { ?>
<article class="container_article">
    <h2><i><?php echo $row['title'] ?></i></h2>
    <p><?php echo $row['article'] ?></p>
    <br>
    <span><?php echo date_format(date_create($row['date']), "Y/m/d") ?>,<?php echo $row['name'] ?></span>
</article>
<?php } ?>