<?php namespace Keipa\PhoneDir\Models;

use Model;

/**
 * Model
 */
class Phonenumber extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    public $belongsTo = [
        'juridical_subscribers' => 'Keipa\PhoneDir\Models\JuridicalSubscribers',
        'private_subscriber' => 'Keipa\PhoneDir\Models\PrivateSubscriber'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'keipa_phonedir_phonenumber';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'phonenumber' => 'unique:keipa_phonedir_phonenumber|regex:/8[0-9]{10}$/'
    ];

    /**
     * @var array The array of custom error messages.
     */
     public $customMessages = [
         'phonenumber.unique' => 'Данный номер телефона занят другим абонентом',
         'phonenumber.regex' => 'Номер телефона имеет формат 8ХХХХХХХХХХ, где Х цифра от 0 до 9. Например 87775554444'
     ];

    public function scopeFindByNumber($query, $name)
    {
        return $query->where('phonenumber', 'like', '%' . $name . '%')
            ->with('juridicalSubscribers')
            ->with('privateSubscriber')
            ->take(1);
    }

    public function juridicalSubscribers()
    {
        return $this->belongsTo(JuridicalSubscribers::class);
    }

    public function privateSubscriber()
    {
        return $this->belongsTo(PrivateSubscriber::class);
    }
}
