<?php

namespace App\Traits;

use App\Models\{welcomeHeader, welcomeProject, WelcomeAbout,User,Role,permission,PermissionRole,ContactUs};

trait IncModels
{
    //
    public function __construct(welcomeHeader $welcomeHeader, welcomeProject $welcomeProject, WelcomeAbout $welcomeAbout, User $user,Role $role,permission $permission,PermissionRole $permissionRole,ContactUs $contactus)
    {
        $this->welcomeHeader = $welcomeHeader;
        $this->welcomeProject = $welcomeProject;
        $this->welcomeAbout = $welcomeAbout;
        $this->user = $user;
        $this->role = $role;
        $this->permission = $permission;
        $this->permissionRole = $permissionRole;
        $this->contactus = $contactus;
    }
}
