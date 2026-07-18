<?php

namespace App\Enums;

enum OrderStatus: string
{
    case PLACED = 'placed';
    case ACCEPTED = 'accepted';
    case PAID = 'paid';
    case PACKED = 'packed';
    case OUTGOING = 'outgoing';
    case DELIVERED = 'delivered';
    case COMPLETE = 'complete';
    case RETURN = 'return';
    case RETURNED = 'returned';
    case REFUNDED = 'refunded';
}
