<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteSetting extends Model
{
    use HasFactory;

    public function logo()
    {
        return $this->logo ?: 'not_found.png';
    }

    public function favicon()
    {
        return $this->favicon ?: 'not_found.png';
    }

    public function footerImg()
    {
        return $this->footer_image ?: 'not_found.png';
    }

}
