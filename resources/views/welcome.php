<h1> <?php echo $heading; ?> </h1>

<?php foreach ($listings as $list):?>

    <h2> <?php echo $list['title'];?> </h2>
    <h2> <?php echo $list['description'];?> </h2>

    <?php endforeach; ?>