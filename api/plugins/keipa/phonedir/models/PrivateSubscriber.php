<?php namespace Keipa\PhoneDir\Models;

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
    ];
}
