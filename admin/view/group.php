<?php
include "../../includes/database.php";
$db = new database();
$result = $db->query('SELECT `group`.id, lector.fio, `group`.name, `group`.count_people FROM `group` JOIN `lector` ON `group`.id_lector = `lector`.id');
$title = "Группы";
$page_header = "Группы";
include "layout/header.php";?>
    <a href="/admin/action/create.php?action=group"><button type="submit" class="btn btn-primary">Создать</button></a>
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
                                Лектор
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Кол-во человек
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Действие
                            </th>
                        </thead>
                        <tbody>
                            <?php while($row = $result->fetch_assoc()):?>
                            <tr role="row" class="odd">
                                <td class="sorting_1"><?=$row['name']?></td>
                                <td><a href="/admin/view/lector.php"><?=$row['fio'] ?></a></td>
                                <td><?=$row['count_people'] ?></td>
                                <td>
                                    <a href="/admin/action/update.php?action=child&id=<?=$row['id']?>">Изменить</a>
                                    <a href="/admin/action/delete.php?action=child&id=<?=$row['id']?>">Удалить</a>
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