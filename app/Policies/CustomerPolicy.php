<?php

namespace App\Policies;

use App\Models\Customer;
use App\Models\User;

class CustomerPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('view_customer');
    }

    public function view(User $user, Customer $customer): bool
    {
        return $user->hasPermissionTo('view_customer');
    }

    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create_customer');
    }

    public function update(User $user, Customer $customer): bool
    {
        return $user->hasPermissionTo('update_customer');
    }

    public function delete(User $user, Customer $customer): bool
    {
        return $user->hasPermissionTo('delete_customer');
    }

    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete_customer');
    }

    public function forceDelete(User $user, Customer $customer): bool
    {
        return $user->hasPermissionTo('delete_customer');
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete_customer');
    }

    public function restore(User $user, Customer $customer): bool
    {
        return $user->hasPermissionTo('delete_customer');
    }

    public function restoreAny(User $user): bool
    {
        return $user->hasPermissionTo('delete_customer');
    }

    public function import(User $user): bool
    {
        return $user->hasPermissionTo('import_customer');
    }

    public function export(User $user): bool
    {
        return $user->hasPermissionTo('export_customer');
    }
}
