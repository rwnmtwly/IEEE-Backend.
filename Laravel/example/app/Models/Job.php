<?php
namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model{
    use HasFactory;
    protected $table = 'job_listings';

    //This represents all of the attributes that are allowed to be mass assigned
    //protected $fillable = ['employer_id','title', 'salary'];

    //element that should be guarded from the mass assignment
    //when this is set to an empty array it's basically disabling the feature entirely
    protected $guarded = [];

    public function employer(){
        return $this->belongsTo(Employer::class);
    }


    public function tags(){
        return $this->belongsToMany(Tag::class,foreignPivotKey:"job_listing_id");
    }

}