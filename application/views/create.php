<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Application -create User</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand">Crud Application</a>
    </div>
</div>
<div class="container" style="padding-top: 10px";>
    <h3>Create User</h3>
    <hr>
    <form method="post" name="CreateUser" action="<?php echo base_url().'index.php/User/create'; ?>">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo set_value('name');?>" class="form-control" >
                    <?php echo form_error('name');?>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="<?php echo set_value('email'); ?>" class="form-control" >
                    <?php echo form_error('email');?>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Create</button>
                    <a href="<?php echo base_url().'index.php/User/index'; ?>" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
    </form>
</div>
    
</body>
</html>