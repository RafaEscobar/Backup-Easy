<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_name',
        'section_description',
        'user_id',
        'tag_id',
        'section_type_id'
    ];

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    public function sectionType()
    {
        return $this->belongsTo(SectionType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function accesses()
    {
        return $this->hasMany(Access::class);
    }
}
