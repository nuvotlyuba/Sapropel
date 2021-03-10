        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white form-wrapper">
                    <div class="container">
                        <h3>Вход</h3>
                        <!-- <hr> -->
                        <?php if (session()->get('success')): ?>
                            <div class="alert alert-success" role ="alert">
                                <?php  echo session()->get('success'); ?>
                            </div>
                        <?php endif; ?>
                        <form method = "post" action ="/admin">
                            <div class="form-group">
                                <!-- <label for="login" class="form-label">Заполните форму для входа</label> -->
                                <input type="text" value = "<?php echo set_value('login'); ?>" name = "login" class="form-control mt-4 mb-2" id="login" placeholder="логин" >
                            </div>
                            <div class="form-group">
                                <!-- <label for="fullname" class="form-label mt-2">Введите имя</label> -->
                                <input type="text" value = "<?php echo set_value('fullname'); ?>" name = "fullname" class="form-control mt-2 mb-2" id="fullname" placeholder="имя" >
                            </div>
                            <div class="form-group">
                                <!-- <label for="email" class="form-label mt-2">Введите Email</label> -->
                                <input type="text" value = "<?php echo set_value('email'); ?>" name = "email" class="form-control mt-2 mb-2" id="email" placeholder="email" >
                            </div>
                            <div class="form-group">
                                <!-- <label for="password" class="form-label mt-2">Введите пароль</label> -->
                                <input type="password" value = "" name = "password" class="form-control mt-2 mb-2" id="password" placeholder="пароль" >
                            </div>
                            <?php if(isset($validation)): ?>
                                <div class="col-12">
                                    <div class="alert alert-danger" role ="alert">
                                    <?php echo $validation->listErrors(); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <button type="submit" class="btn btn-success mt-4">Войти</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
