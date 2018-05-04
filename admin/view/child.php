<?php
include "../../includes/database.php";
$db = new database();
$result = $db->query('SELECT child.id, child.fio, b_d, address, mob_phone, home_phone, name FROM `child` JOIN `group` ON child.id_group = group.id');
$title = "Дети";
$page_header = "Дети";
include "layout/header.php";?>
    <a href="/admin/action/create.php?action=child"><button type="submit" class="btn btn-primary">Создать</button></a>
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
                                День рождение
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Адрес
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Мобильный телефон
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
                            <td><?=$row['b_d'] ?></td>
                            <td><?=$row['address'] ?></td>
                            <td><?=$row['mob_phone'] ?></td>
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