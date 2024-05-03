<?php

namespace App\Repository;

interface UserRepository
{
    public function updateDataCustomer($oldData, $newData);
    public function storeUser($user, $newUser);
    public function emailUserSelect($email);
}
