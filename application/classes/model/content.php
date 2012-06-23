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

    public function getMatches()
    {
        return DB::select()
            ->from('matches')
            ->order_by('time')
            ->execute()
            ->as_array();
    }

    public function getMatchesGroupByTime( $matches )
    {
        $matches_group_by_time = array();
        $russian_months = array('01' => 'января', '02' => 'февраля', '03' => 'марта', '04' => 'апреля', '05' => 'мая', '06' => 'июня', '07' => 'июля', '08' => 'августа', '09' => 'сентября', '10' => 'октября', '11' => 'ноября', '12' => 'декабря');

        foreach($matches as $item)
        {
            $date_in_russian_format = date('d', strtotime($item['time'])) . " " . $russian_months[date('m', strtotime($item['time']))];
            if (!isset($matches_group_by_time[$date_in_russian_format]))
                $matches_group_by_time[$date_in_russian_format] = array();

            array_push($matches_group_by_time[$date_in_russian_format], $item);
        }

        return $matches_group_by_time;
    }
}
?>
