<?php namespace Marek\Filmy\Models;

use Model;

/**
 * Film Model
 */
class Film extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'marek_filmy_films';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'name', 'genre', 'director', 'release', 'rating'
    ];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [
        'name' => 'required',
        // 'genre' => 'required',
        'director' => 'required',
        'release' => 'required',
        'rating' => 'required'
    ];

    /**
     * @var array Attributes to be cast to native types
     */
    protected $casts = [];

    /**
     * @var array Attributes to be cast to JSON
     */
    protected $jsonable = [];

    /**
     * @var array Attributes to be appended to the API representation of the model (ex. toArray())
     */
    protected $appends = [];

    /**
     * @var array Attributes to be removed from the API representation of the model (ex. toArray())
     */
    protected $hidden = [];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $hasOneThrough = [];
    public $hasManyThrough = [];
    public $belongsTo = [
        'release' => 'Marek\Filmy\Models\Release',
        'director' => 'Marek\Filmy\Models\Director',
        'rating' => 'Marek\Filmy\Models\Rating',
        'genre' => 'Marek\Filmy\Models\Genre'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'poster' => 'System\Models\File'
    ];
    public $attachMany = [];
    public function beforeSave() {
      // dd($this->director());
    }
}
