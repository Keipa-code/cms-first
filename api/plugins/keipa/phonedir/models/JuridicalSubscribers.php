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
    ];
}
