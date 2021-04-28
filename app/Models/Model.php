<?php

namespace App\Models;

class Model
{
    // Table in DB
    protected $table;

    // Set to protect fetching to much data
    protected $limit;

    // Fields that are protected from write actions
    protected $guarded = [
        'id',
    ];
    
    /**
     * Constructor function
     * @param $table (string) name of the database table
     */
    public function __construct($table, $limit = null)
    {
        $this->table = $table;

        $this->limit = $limit;
    }

    /**
     * Get all records from table
     * @param $fields (array) field selections
     */
    public function all(array $fields = null)
    {
        return [
            'users' => [
                [
                    'name'  => 'Toby',
                    'last'  => 'Versteeg',
                    'age'   => 50,
                ],

                [
                    'name'  => 'Jan-W',
                    'last'  => 'H',
                    'age'   => 36,
                ]
            ]
        ];
    }

    /**
     * Get one record from table
     * @param $id (int) the id of the record to get
     * @param $fields (array) field selections
     */
    public function get(int $id, array $fields = null)
    {
        if ($id === 0) return null;

        
    }

    public function ivar()
    {
        return "Ivar";
    }

}