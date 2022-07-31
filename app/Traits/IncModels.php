<?php

namespace App\Traits;

use App\Models\{welcomeHeader, welcomeProject, WelcomeAbout,User,Role,permission,PermissionRole,Communication,Media};

trait IncModels
{
    //
    public function __construct(welcomeHeader $welcomeHeader, welcomeProject $welcomeProject, WelcomeAbout $welcomeAbout, User $user,Role $role,permission $permission,PermissionRole $permissionRole,Communication $communication, Media $medium)
    {
        $this->welcomeHeader = $welcomeHeader;
        $this->welcomeProject = $welcomeProject;
        $this->welcomeAbout = $welcomeAbout;
        $this->user = $user;
        $this->role = $role;
        $this->permission = $permission;
        $this->permissionRole = $permissionRole;
        $this->communication = $communication;
        $this->medium = $medium;
    }
}
