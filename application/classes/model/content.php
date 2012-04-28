<?php defined('SYSPATH') or die('No direct script access.');

class Model_Content extends Model
{
    public function getSportTypes()
    {
        $request = DB::select()
            ->from('sport')
            ->execute()
            ->as_array();

        return $request;
    }

    public function getChallenge()
    {
        $request = DB::select()
            ->from('challenge')
            ->execute()
            ->as_array();

        return $request;
    }
}
?>
