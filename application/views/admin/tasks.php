<div class="container">





    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Написати</button>

                            <a href="/"> <button type="button" class="btn btn-lg btn-secondary"  >Сайт</button></a>
                            <a href="/admin/logout"> <button type="button" class="btn btn-lg btn-secondary"  >Logout</button></a>

                            <center><h1>Адмінка</h1></center>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Відгук </th>
                                <th>Ім'я</th>
                                <th>Пошта</th>
                                <th>Дата</th>
                                <th>Дія</th>
                            </tr>
                            </thead>


                            <tbody>

                            <?php foreach ($news as $val): ?>

                                <tr>
                                    <td><?php echo $val['task']; ?></td>
                                    <td><?php echo $val['name']; ?></td>
                                    <td><?php echo $val['email']; ?></td>
                                    <td><?php echo $val['date']; ?></td>
                                    <td>
                                        <a href="/admin/edit/<?php echo $val['id']; ?>" class="btn btn-warning">
                                            Редагувати
                                        </a>

                                        <a onclick="return confirm('Хочеш видалити????');" href="/admin/delete/<?php echo $val['id']; ?>" class="btn btn-danger">Видалити</a>
                                    </td>

                                </tr>

                            <?php endforeach; ?>


                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>

                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form action="/admin/add" method="post" >
                        <div class="form-group">
                            <label for="exampleInputEmail1">Введіть Ваше ім'я</label>
                            <input type="text" name="name"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Введіть Вашу пошту</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Введіть Ваш сайт</label>
                            <input type="text" name="site" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" >
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Введіть Відгук</label>
                            <input type="text" name="task"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Відгук" required>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LcegmwUAAAAAPeciLsPiupXq80PoBkQWofHB_D2"></div>

                        <button type="submit" class="btn btn-primary">Відправити</button>
                    </form>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">я передумав писати</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->



