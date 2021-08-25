<?php

namespace App\Models;

//use App\Models\Workshop;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $table = 'events';

	public static function getEventDetails(){

		$results = Event::all();
	    
	    return $results;
		/*foreach ($results as $result) {
		   return $result->name;
		   //return $result; 
		}*/
		//$results = Event::get();
		/*$result     = DB::table($table);
	    $result->select($select);
	    if (!empty($where)) {
	        $result->where($where);
	    }
	    if ($orderField != null && $orderBy != null) {
	        $result->orderby($orderField, $orderBy);
	    }
	    $results = $result->get();*/
	}

	public function workshops()
    {
    	return $this->hasMany(Workshop::class, 'event_id');
    }


}
