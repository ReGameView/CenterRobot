<?php
include '../../includes/database.php';
$db = new database();
if(isset($_GET['action']) and isset($_GET['id']))
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
    $date = "SELECT * FROM ".$_GET['action']." WHERE id = ".$_GET['id'];
    $query_date = $db->query($date);
    $a_date = [];
    while($while = $query_date->fetch_assoc())
        $a_date += $while;
    $title = "Изменение записи";
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
                            <input type="<?=$value ?>" class="form-control" placeholder="<?=$key ?>" name="<?=$key ?>" value="<?=$a_date[$key] ?>">
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
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <button type="submit" class="btn btn-primary">Создать</button>
        </div>
    </form>
    <?php
}
elseif (isset($_GET['table']))
{
    $start = "UPDATE `".$_GET['table']."`";
    $where = " WHERE id = ".$_GET['id'];
    switch ($_GET['table'])
    {
        case "child":
            $set = " SET `id_group` = ".$_GET['id_group'].", `fio` = '".$_GET['fio']."', `b_d` = '".$_GET['b_d']."', `address` = '".$_GET['address']."', `mob_phone` = '".$_GET['mob_phone']."', `home_phone` = '".$_GET['home_phone']."' ";
            break;
        case "group":
            $set = " SET `name` = '".$_GET['name']."', `count_people` = ".$_GET['count_people'].", `id_lector` = ".$_GET['id_lector'];
            break;
        case "lector":
            $set = " SET `fio` = '".$_GET['fio']."', `b_d` = '".$_GET['b_d']."', `number_delo` = ".$_GET['number_delo'];
            break;
        case "parent":
            $set = " SET `fio` = '".$_GET['fio']."', id_child = ".$_GET['id_child'].", who_is = '".$_GET['who_is']."', address = '".$_GET['address']."', phone = '".$_GET['phone']."', work = '".$_GET['work']."';";
            break;
        case "raspisanie":
            $set = " SET id_group = ".$_GET['id_group'].", `price` = '".$_GET['price']."', , perioud = '".$_GET['perioud']."', id_lector = ".$_GET['id_lector'].", is_recommend = ".$_GET['is_recommend'].";";
            break;
    }
    $query = $start . " " . $set . " " . $where . ";";
    $db->query($query);
    header("Location: /admin/view/".$_GET['table'].".php");
}
else
{
    header("Location /admin/");
}