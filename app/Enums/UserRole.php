<?php

namespace App\Enums;

enum UserRole: string
{
    case ADMIN = 'admin';
    case CONSUMER = 'consumer';
    case FARMER = 'farmer';
}
