<?php
include "../../includes/database.php";
$db = new database();
$result = $db->query('SELECT price, `group`.name, lector.fio, is_recommend FROM `raspisanie` JOIN `group` ON raspisanie.id_group = `group`.id JOIN `lector` ON `group`.id_lector = `lector`.id');
$title = "Расписание";
$page_header = "Расписание";
include "layout/header.php";?>
    <a href="/admin/action/create.php?action=raspisanie"><button type="submit" class="btn btn-primary">Создать</button></a>
    <div class="box-body">
        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row"><div class="col-sm-6"></div>
                <div class="col-sm-6"></div></div><div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Название группы
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                ФИО
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Цена
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                День недели / Время
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Действие
                            </th>
                        </thead>
                        <tbody>
                        <?php while($row = $result->fetch_assoc()):?>
                            <tr role="row" class="odd">
                                <td class="sorting_1"><?=$row['name']?></td>
                                <td><?=$row['fio'] ?></td>
                                <td><?=$row['price'] ?> р.</td>
                                <td></td>
                                <td>
                                    <a href="/admin/action/update.php?action=raspisanie&id=<?=$row['id']?>">Изменить</a>
                                    <a href="/admin/action/delete.php?action=raspisanie&id=<?=$row['id']?>">Удалить</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include "layout/footer.php";?>