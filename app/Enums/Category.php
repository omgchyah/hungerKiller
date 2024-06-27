<?php

namespace App\Enums;

enum Category: string {
    case Appetizer = 'Appetizer';
    case MainCourse = 'Main course';
    case SideDish = 'Side dish';
    case Dessert = 'Dessert';
    case Salad = 'Salad';
    case Soup = 'Soup';
    case Beverage = 'Beverage';
    case Snack = 'Snack';
}