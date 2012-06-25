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
        sort($matches);

        $matches_group_by_time = array();
        $russian_months = array('01' => 'января', '02' => 'февраля', '03' => 'марта', '04' => 'апреля', '05' => 'мая', '06' => 'июня', '07' => 'июля', '08' => 'августа', '09' => 'сентября', '10' => 'октября', '11' => 'ноября', '12' => 'декабря');

        foreach($matches as $item)
        {
            $date_in_russian_format = date('j', strtotime($item['time'])) . " " . $russian_months[date('m', strtotime($item['time']))];

            if (!isset($matches_group_by_time[$date_in_russian_format]))
            {
                $matches_group_by_time[$date_in_russian_format] = array(
                    'date' => array(
                        'day' => date('j', strtotime($item['time'])),
                        'month' => $russian_months[date('m', strtotime($item['time']))]
                    ),
                    'matches' => array()
                );
             }

            $teams_from_str = explode(" ", $item['title']);
            $item['team1'] = $teams_from_str[0];
            $item['team2'] = $teams_from_str[2];

            $matches_group_by_time[$date_in_russian_format]['matches'][] = $item;
        }

        return $matches_group_by_time;
    }
}
?>
