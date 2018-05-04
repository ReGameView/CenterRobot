<?php
include "../../includes/database.php";
$db = new database();
$result = $db->query('SELECT parent.fio as parent, child.fio as child, who_is, parent.address, phone, work FROM `parent` JOIN child ON id_child = child.id');
$title = "Родители";
$page_header = "Родители";
include "layout/header.php";?>
    <a href="/admin/action/create.php?action=parent"><button type="submit" class="btn btn-primary">Создать</button></a>
    <div class="box-body">
        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row"><div class="col-sm-6"></div>
                <div class="col-sm-6"></div></div><div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                ФИО Родителя
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                ФИО Ребенка
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Кто это
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Адрес
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Телефон
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Работа
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Действие
                            </th>
                        </thead>
                        <tbody>
                        <?php while($row = $result->fetch_assoc()):?>
                            <tr role="row" class="odd">
                                <td class="sorting_1"><?=$row['parent']?></td>
                                <td><?=$row['child'] ?></td>
                                <td><?=$row['who_is'] ?></td>
                                <td><?=$row['address'] ?></td>

                                <td><?=$row['phone'] ?></td>
                                <td><?=$row['work'] ?></td>
                                <td>
                                    <a href="/admin/action/update.php?action=parent&id=<?=$row['id']?>">Изменить</a>
                                    <a href="/admin/action/delete.php?action=parent&id=<?=$row['id']?>">Удалить</a>
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