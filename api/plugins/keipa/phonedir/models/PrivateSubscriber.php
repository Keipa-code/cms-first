<?php namespace Keipa\PhoneDir\Models;

use Model;

/**
 * Model
 */
class PrivateSubscriber extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    //public $timestamps = false;


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
