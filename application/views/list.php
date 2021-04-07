<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Application -View User</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand">Crud Application</a>
    </div>
</div>
<div class="container" style="padding-top: 10px";>
    <div class="row">
        <div class="col-md-12">
            <?php
                $success = $this->session->userdata('success');
                if($success != "")  {
            ?>
                <div class="alert alert-success"><?php echo $success; ?></div>
            <?php
            }
            ?>
            <?php
                $failure = $this->session->userdata('failure');
                if($failure != "")  {
                ?>
                <div class="alert alert-success"><?php echo $failure; ?></div>
            <?php
            }
            ?>

        </div>    
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class=row>
                <div class="col-6">
                    <h3>View User</h3>
                </div>
                <div class="col-6 text-right">
                    <a href="<?php echo base_url().'index.php/User/create' ?>" class="btn btn-primary">Create</a>
                </div>
            </div>
          <hr>
        </div>
    </div>

    <div class=row>
        <div class="col-md-8">
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th width="60">Edit</th>
                    <th width="100">Delete</th>
                </tr>

                <?php if(!empty($users)) {  foreach($users as $user)    { ?>
                    <tr>
                        <td><?php echo $user['userid'] ?></td>
                        <td><?php echo $user['name'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td>
                            <a href="<?php echo base_url().'index.php/User/edit/'.$user['userid'] ?>" class="btn btn-primary">Edit</a>

                        </td>
                        <td>
                            <a href="<?php echo base_url().'index.php/User/delete/'.$user['userid'] ?>" class="btn btn-danger">Delete</a>
                            
                        </td>
                    </tr>
                <?php }}  else  { ?>
                    <tr>
                        <td colspan="5">Records not found</td>
                    </tr>
                <?php }?>
            </table>
        </div>
    </div>
    
</div>
    
</body>
</html>