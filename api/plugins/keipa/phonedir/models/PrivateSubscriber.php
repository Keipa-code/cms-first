<?php namespace Keipa\PhoneDir\Models;

use Db;
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
        return $query->where(Db::raw(
            "REPLACE(
                CONCAT(
                    COALESCE(surname,''),' ',
                    COALESCE(firstname,''),' ',
                    COALESCE(patronymic,'')
                ),
            '  ',' ')"
        ),
            'like', '%' . $name . '%')
            ->orWhere(Db::raw(
                "REPLACE(
                CONCAT(
                    COALESCE(surname,''),' ',
                    COALESCE(patronymic,''),' ',
                    COALESCE(firstname,'')
                ),
            '  ',' ')"
            ),
                'like', '%' . $name . '%')
            ->orWhere(Db::raw(
                "REPLACE(
                CONCAT(
                    COALESCE(firstname,''),' ',
                    COALESCE(patronymic,''),' ',
                    COALESCE(surname,'')
                ),
            '  ',' ')"
            ),
                'like', '%' . $name . '%')
            ->orWhere(Db::raw(
                "REPLACE(
                CONCAT(
                    COALESCE(firstname,''),' ',
                    COALESCE(surname,''),' ',
                    COALESCE(patronymic,'')
                ),
            '  ',' ')"
            ),
                'like', '%' . $name . '%')
            ->orWhere(Db::raw(
                "REPLACE(
                CONCAT(
                    COALESCE(patronymic,''),' ',
                    COALESCE(surname,''),' ',
                    COALESCE(firstname,'')
                ),
            '  ',' ')"
            ),
                'like', '%' . $name . '%')
            ->orWhere(Db::raw(
                "REPLACE(
                CONCAT(
                    COALESCE(patronymic,''),' ',
                    COALESCE(firstname,''),' ',
                    COALESCE(surname,'')
                ),
            '  ',' ')"
            ),
                'like', '%' . $name . '%')
            ;
    }
}
