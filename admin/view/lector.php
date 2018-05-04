<?php
include "../../includes/database.php";
$db = new database();
$result = $db->query('SELECT * FROM `lector`');
$title = "Лекторы";
$page_header = "Лекторы";
include "layout/header.php";?>
    <a href="/admin/action/create.php?action=lector"><button type="submit" class="btn btn-primary">Создать</button></a>
    <div class="box-body">
        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row"><div class="col-sm-6"></div>
                <div class="col-sm-6"></div></div><div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                ФИО
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                День рождения
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Дата приёма
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Номер дело
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Действие
                            </th>
                        </thead>
                        <tbody>
                            <?php while($row = $result->fetch_assoc()):?>
                            <tr role="row" class="odd">
                                <td class="sorting_1"><?=$row['fio']?></td>
                                <td><?=$row['b_d'] ?></td>
                                <td><?=$row['date_priem'] ?></td>
                                <td><?=$row['number_delo'] ?></td>
                                <td>
                                    <a href="/admin/action/update.php?action=lector&id=<?=$row['id']?>">Изменить</a>
                                    <a href="/admin/action/delete.php?action=lector&id=<?=$row['id']?>">Удалить</a>
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