<?php namespace Keipa\PhoneDir\Models;

use Illuminate\Support\Facades\DB;
use Model;

/**
 * Model
 */
class PrivateSubscriber extends Model
{
    use \October\Rain\Database\Traits\Validation;

    protected $fillable = ['phonenumber'];

    public $hasMany = [
        'phonenumbers' => 'Keipa\PhoneDir\Models\Phonenumber'
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'keipa_phonedir_private';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'firstname' => 'required|min:1|max:30',
        'surname' => 'required|min:1|max:30',
        'patronymic' => 'required|min:1|max:30'
    ];

    public function scopeFindUserByName($query, $name)
    {
        // Concat the name columns and then apply search query on full name
        return $query->where(DB::raw(
            "REPLACE(
                CONCAT(
                    COALESCE(surname,''),' ',
                    COALESCE(firstname,''),' ',
                    COALESCE(patronymic,'')
                ),
            '  ',' ')"
        ),
            'like', '%' . $name . '%');
    }
}
