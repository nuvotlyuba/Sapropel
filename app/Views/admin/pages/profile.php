<div class="container">
    <div class="row">
        <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="container">
                <h3><?= $user['login']; ?></h3>
                <hr>
                <?php if (session()->get('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->get('success') ?>
                    </div>
                <?php endif; ?>
                <form class="" action="/profile" method="post">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="login">Логин</label>
                                <input type="text" class="form-control" readonly name="login" id="login" value="<?php echo set_value('login', $user['login']) ?>">
                            </div>
                            <div class="form-group">
                                <label for="fullname">Имя</label>
                                <input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo set_value('fullname', $user['fullname']) ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" readonly  id="email" value="<?php echo  set_value('email', $user['email']) ?>">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="password">Пароль</label>
                                <input type="password" class="form-control" name="password" id="password" value="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="password_confirm">Повторите пароль</label>
                                <input type="password" class="form-control" name="password_confirm" id="password_confirm" value="">
                            </div>
                        </div>
            
                        <?php if (isset($validation)): ?>
                            <div class="col-12">
                                <div class="alert alert-danger" role="alert">
                                    <?= $validation->listErrors() ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-success mt-4">Обновить</button>
                        </div>
                        <div class="col-12 col-sm-8 text-right mt-4">
                            <a href="/register">Добавить пользователя</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</disv>