<?php

namespace Controllers;

use Models\Article;

class HomeController extends BaseController {
    public function home($req,$req2){
        //$article = Article::first();
        //echo __FILE__;
        //echo $req.'<br>'.$req2;
        //require dirname(__FILE__).'/../views/home.php';
        $this->view = \View::make('home')->with('article',Article::first())
            ->withTitle('MFFC :-D')
            ->withFindMe('OK!')
            ->withReq($req)->with('req2',$req2);

        /*$this->mail = \Mail::to(['ooxx@gmail.com', 'ooxx@qq.com'])

            ->from('MotherFucker <ooxx@163.com>')

            ->title('Fuck Me!')

            ->content('<h1>Hello~~</h1>');*/

        \Redis::set('key','value',5,'s');

        echo \Redis::get('key').'<br>';
    }
}