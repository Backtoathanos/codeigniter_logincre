<?php

declare(strict_types=1);

namespace App\Models;

use CodeIgniter\Shield\Models\UserModel as ShieldUserModel;

class UserModel extends ShieldUserModel
{
    protected $table = 'users';
    
    protected $allowedFields = [
        'name',
        'email',
        'password',
        'created_at'
    ];
    
    // protected function initialize(): void
    // {
    //     parent::initialize();

    //     $this->allowedFields = [
    //         ...$this->allowedFields,

    //         // 'first_name',
    //     ];
    // }
}