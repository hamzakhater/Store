<?php

function lang($phrase)
{
    static $lang = array(
        //Home page
        'MASSEGE' => 'Wellcome To Our Store',
        'ADMIN' => 'Admin',
        //setting
        //product
    );
    return $lang[$phrase];
}
    // $lang = array(
    //     'salma' => 'THe name for this  user is Salma Alfarra '
    // );
    // echo $lang['salma'];
