<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * model table action
 */
class Action extends Model
{
	/**
	 * name table
	 * @var string
	 */
    protected $table = 'actions';

    /**
     * define create_at update_at
     * @var boolean
     */
    public $timestamps = true;

    /**
     * Os atributos que são atribuíveis
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'action', 'controller', 'subdominio', 'active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'create_at', 'update_at'
    ];
}