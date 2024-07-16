<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'slider_image_1', 'slider_image_2', 'slider_image_3',
        'slider_title_1', 'slider_title_2', 'slider_title_3',
        'slider_description_1', 'slider_description_2', 'slider_description_3',
        'image_1', 'image_2', 'image_3', 'image_4',
        'label_1', 'label_2', 'label_3', 'label_4',
        'section_title_1', 'section_title_2', 'section_title_3',
        'section_paragraph_1', 'section_paragraph_2', 'section_paragraph_3',
        'section_image_1', 'section_image_2', 'section_image_3',
        'instagram_posts'
    ];
}
