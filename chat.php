<?php

include_once 'env.php';

$query = 'SELECT * FROM chat order by id asc';
$execute = $connection->query($query);
while ($row = $execute->fetch_array()) {

?>

    <div class="chat-data">
        <span style="color: #1c62c4"><?php echo $row['username'] ?>:</span>
        <span><?php echo $row['message'] ?></span>
        <span class="span-hours"><?php echo $row['creation_date'] ?></span>
    </div>

<?php
}
?>