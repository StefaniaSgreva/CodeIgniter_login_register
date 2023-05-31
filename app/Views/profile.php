<div class="container">
    <div class="row"> 
        <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 py-3 bg-white form-wrapper rounded-3">
            <?php if (isset($validation)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $validation->listErrors() ?>
                </div>
            <?php endif; ?> 
            <div class="container">
                <h3><?= $user['firstname'].' '.$user['lastname'] ?></h3>
                <hr>  
                <?php if (session()->get('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->get('success') ?>
                </div>
                <?php endif; ?> 
                <form class="" action="/profile" method="post">
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="firstname" id="firstname" value="<?= set_value('firstname', $user['firstname']) ?>">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" value="<?= set_value('lastname', $user['lastname']) ?>">
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" readonly id="email" value="<?= set_value('email',$user['email']) ?>">
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-12 col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="password_confirm" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirm" id="password_confirm">
                            </div>  
                        </div>
                       

                        <div class="row my-3 mx-0">
                            <div class="col-12 text-end">
                                <button type="submit" class="btn btn-outline-secondary">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>