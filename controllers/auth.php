<?php
    
function auth_login() {
    sleep(1);
    $data = array();
     if(isLogged())
    {
         redirect('/blogtaolao_MVC_/index.php');
    }
    if (isPostRequest()) {
        $postData = postData();
        if (model('user')->authLogin($postData)) {
            redirect('/blogtaolao_MVC_/index.php');
        } else {
            $data['error'] = 'Login failed ! Please try again !';
        }
    }
    $data['template_file'] = 'auth/login.php';
    render('layout.php', $data);
}
function auth_logout() {
    model('user')->authLogout();
    redirect('/blogtaolao_MVC_/index.php');
}
function auth_register()
{
     sleep(1);
    $data = array(); 
    if (isPostRequest()) {
        $postData = postData();
        if (model('user')->aut_register($postData)) {
            redirect('/blogtaolao_MVC_/index.php');
        } 
        else
        {
        $data['error'] = 'Email đã tồn tại ';
        }
    }
    $data['template_file'] = 'auth/register.php';
    render('layout.php', $data);
}