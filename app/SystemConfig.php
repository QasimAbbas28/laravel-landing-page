<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemConfig extends Model
{
	/**
	 * Returns company name
	 * @return [array] [return company name]
	 */
    public static function companyname()
    {
    	return static::all()
    	->where('entity','company_name')
    	->toArray();
    }

    /**
	 * Returns company slogan
	 * @return [array] [return company name]
	 */
    public static function companyslogan()
    {
    	return static::all()
    	->where('entity','company_slogan')
    	->toArray();
    }

    /**
	 * Returns company logo
	 * @return [array] [return company logo]
	 */
    public static function companylogo()
    {
    	return static::all()
    	->where('entity','company_logo')
    	->toArray();
    }

    /**
	 * Returns company location
	 * @return [array] [return company location]
	 */
    public static function companylocation()
    {
    	return static::all()
    	->where('entity','company_location')
    	->toArray();
    }
}
