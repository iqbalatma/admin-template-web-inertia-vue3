<?php

namespace App\Enums;

use ArchTech\Enums\InvokableCases;

enum Table:string
{
    use InvokableCases;

//    AUTH
    case USERS = "auth.users";
    case ROLES = "auth.roles";
    case PERSONAL_ACCESS_TOKEN = "auth.personal_access_tokens";
    case PASSWORD_RESET_TOKENS = "auth.password_reset_tokens";
    case PERMISSIONS = "auth.permissions";
    case MODEL_HAS_PERMISSIONS = "auth.model_has_permissions";
    case MODEL_HAS_ROLES = "auth.model_has_roles";
    case ROLE_HAS_PERMISSIONS = "auth.role_has_permissions";


//    PUBLIC
    case FAILED_JOBS = "public.failed_jobs";

}
