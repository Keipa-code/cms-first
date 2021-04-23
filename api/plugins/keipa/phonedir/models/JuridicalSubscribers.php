<?php namespace Keipa\PhoneDir\Models;

use Model;

/**
 * Model
 */
class JuridicalSubscribers extends Model
{
    use \October\Rain\Database\Traits\Validation;

    protected $fillable = ['phonenumber'];

    public $hasMany = [
        'phonenumbers' => 'Keipa\PhoneDir\Models\Phonenumber'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'keipa_phonedir_juridical';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'org_name' => 'required|min:1|max:50',
        'department_name' => 'required|min:1|max:50',
        'country' => 'required|min:1|max:80',
        'city' => 'required|min:1|max:50',
        'street' => 'required|min:1|max:50',
        'house' => 'required|min:1|max:10',
        'float' => 'max:30',
    ];
}
