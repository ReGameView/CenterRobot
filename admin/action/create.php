<?php
include "../../includes/database.php";
$db = new database();

if(isset($_GET['action']))
{
    $label = $db->query('SELECT * FROM `label_translete`');
    $a_label = [];
    while($while = $label->fetch_assoc())
        $a_label += [$while['name'] => $while['ru']];
    $input = array();
    $id_group = "SELECT id, name FROM `group`";
    $id_lector = "SELECT id, fio as name FROM `lector`";
    $id_child = "SELECT id, fio as name FROM `child`";
    switch ($_GET['action']) {
        case "child":
            $input = [
                'id_group' => 'select',
                'fio' => 'text',
                'b_d' => 'date',
                'address' => 'text',
                'mob_phone' => 'phone',
                'home_phone' => 'text'];
            break;
        case "group":
            $input = [
                'name' => 'text',
                'id_lector' => 'select'];
            break;
        case "lector":
            $input = [
                'fio' => 'text',
                'b_d' => 'date',
                'date_priem' => 'date',
                'number_delo' => 'text'];
            break;
        case "parent":
            $input = [
                'fio' => 'text',
                'id_child' => 'select',
                'who_is' => 'text',
                'address' => 'text',
                'phone' => 'phone',
                'work' => 'textarea'];
            break;
        case "raspisanie":
            $input = [
                'id_group' => 'select',
                'price' => 'text',
                'perioud' => 'text',
                'id_lector' => 'select',
                'is_recommend' => 'radio'];
            break;
    }
    $title = "Создание новой записи";
    include "../view/layout/header.php";
    ?>
    <form class="form-horizontal">
        <div class="box-body">
            <?php
            foreach ($input as $key => $value):
            ?>
                <div class="form-group">
                    <label for="<?=$key?>" class="col-sm-2 control-label"><?=$a_label[$key];?>:</label>
                    <div class="col-sm-10">
                        <?php
                        if($value != "select" and $value != "radio"):
                        ?>
                            <input type="<?=$value ?>" class="form-control" placeholder="<?=$key ?>" name="<?=$key ?>">
                        <?php
                        elseif($value == "select"):
                            $result = $db->query($$key); ?>
                            <select class="form-control" name="<?=$key?>">
                                <?php while($row = $result->fetch_assoc()):?>
                                    <option name="<?=$key ?>" value="<?=$row['id'] ?>"><?=$row['name']?></option>
                                <?php endwhile; ?>
                            </select>
                        <?php
                        elseif($value == "radio"): ?>
                            <div class="radio">
                                <label>
                                    Нет
                                    <input type="radio" name="<?=$key?>" value="0" checked>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    Да
                                    <input type="radio" name="<?=$key?>" value="1">
                                </label>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            <?php endforeach; ?>
            <input type="hidden" name="table" value="<?=$_GET['action']?>">
            <button type="submit" class="btn btn-primary">Создать</button>
        </div>
    </form>
    <?php
}else{
    $call = "CALL create_".$_GET['table'];
    switch ($_GET['table']){
        case "child":
            $input = "".$_GET['id_group'].", '".
                $_GET['fio']. "', '".
                $_GET['b_d']. "', '".
                $_GET['address']. "', '".
                $_GET['mob_phone']. "', '".
                $_GET['home_phone']."'";
            break;
        case "group":
            $input = "'".$_GET['name']."', ".
                $_GET['id_lector']."";
            break;
        case "lector":
            $input = "'".$_GET['fio']."', '".
                $_GET['b_d']."', '".
                $_GET['date_priem']."', '".
                $_GET['number_delo']."'";
            break;
        case "parent":
            $input = "'".$_GET['fio']."', ".
                $_GET['id_child'].", '".
                $_GET['who_is']."', '".
                $_GET['address']."', '".
                $_GET['phone']."', '".
                $_GET['work']."'";
            break;
        case "raspisanie":
            $input = "".$_GET['id_group']. ", ".
                $_GET['price']. ", ".
                $_GET['perioud']. ", ".
                $_GET['id_lector']. ", ".
                $_GET['is_recommend']. "";
            break;
    }
    $query = $call ."(". $input.");";
    $db->query($query);
    var_dump($query);
    header("Location: /admin/view/".$_GET['table'].'.php');
}