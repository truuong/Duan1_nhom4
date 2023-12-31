<?php
require_once 'pdo.php';

function users_insert( $name, $phone, $password, $email, $username, $permission)
{
    $sql = "INSERT INTO users( name, phone, password, email, username, permission) VALUES ( '$name', '$phone', '$password', '$email', '$username', $permission)";
    pdo_execute($sql);
}

function users_update($id, $name, $phone, $password, $email, $permission)
{


    $sql = "UPDATE users SET name='$name', phone='$phone', password='$password' , email='$email', permission=$permission WHERE id ='$id'";

    pdo_execute($sql);
}

function users_delete($id)
{
    $sql = "DELETE FROM users  WHERE id ='$id '";
    pdo_execute($sql);
}

function users_select_all()
{
    $sql = "SELECT * FROM users";
    return pdo_query($sql);
}

function users_select_by_id($id)
{
    $sql = "SELECT * FROM users WHERE id ='$id'";
    $dm = pdo_query_one($sql);
    return $dm;
}
function users_check($id, $password)
{
    $sql = "SELECT * FROM users WHERE id ='$id ' AND password= '$password'";
    $kh = pdo_query_one($sql);
    return $kh;
}
function users_select_by_email($id, $email)
{
    $sql = "SELECT * FROM users WHERE id ='$id ' AND email='$email'";
    $kh = pdo_query_one($sql);
    return $kh;
}

function users_exist($id)
{
    $sql = "SELECT count(*) FROM users WHERE id =?";
    return pdo_query_value($sql, $id) > 0;
}

function users_select_by_role($permission)
{
    $sql = "SELECT * FROM users WHERE permission=$permission";
    return pdo_query($sql, $permission);
}

function users_change_password($id, $password, $name, $email)
{

    $sql = "UPDATE users SET password='$password' , name='$name', hinh=hinh, email='$email' WHERE id ='$id '";

    pdo_execute($sql);
}