<?php

function lang($phrase){

    static $lang = array(
        //Home page
        'MASSEGE'=>'مرحبابك في متجرنا ',
        
        'ADMIN'=>'مدير النظام ',

        //setting

        //product

    );
    return $lang[$phrase];
}
    // $lang = array(
    //     'salma' => 'THe name for this  user is Salma Alfarra '
    // );

    // echo $lang['salma'];