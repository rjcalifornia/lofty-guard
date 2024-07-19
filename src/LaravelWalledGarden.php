<?php

namespace Rjcalifornia\LaravelWalledGarden;
use Illuminate\Support\Facades\Log;

class LaravelWalledGarden{
    public static function hasPermission($user, String $permissionName)
    {
        $allow = false;
        if ($user->rol) {
            foreach ($user->rol->permissions as $permiso) {
                if ($permiso->name == $permissionName) {
                    $allow = true;
                    // return true;
                }
            }
            Log::info($user->rol->permissions);
        }

         foreach ($user->specialPermissions as $specialPermission) {
            if ($specialPermission->name == $permissionName) {
                // return true;
                $allow = true;
            }
        } 
        if ($allow) {
            Log::debug("Usuario $user->id con resultado aprobado para permiso $permissionName");
        } else {
            Log::debug("Usuario $user->id con resultado denegado para permiso $permissionName");
        }
        // Log::info($user->specialPermissions);
        // return false;
        return $allow;
    }
}