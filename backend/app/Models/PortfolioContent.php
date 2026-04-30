<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioContent extends Model
{
    protected $table = 'portfolio_contents';

    protected $fillable = [
        'section_name',
        'content',
    ];
}
