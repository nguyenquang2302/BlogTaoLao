<?php
    
function auth_login() {
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