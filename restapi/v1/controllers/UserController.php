<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 26.01.2021
 */


namespace restapi\v1\controllers;


use yii\rest\ActiveController;

class UserController extends  MyController
{
    public $modelClass = 'common\models\User';
}