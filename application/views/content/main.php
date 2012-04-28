<?=$header;?>
<div class="header_box">
    <div class="header_box_wrap">
        <div class="main_logo"><a href="/"><img src="/images/logo.png" /></a></div>
    </div>
</div>
<div class="content_box">
    <div class="col1">
        <div class="matches_wrap">
            <div class="match_item">
                <p class="match_title">Спартак (Москва) - Локомотив (Москва)</p>
                <p class="match_info_more"></p>
                <div class="clear"></div>
                <div class="match_description">
                </div>
            </div>
        </div>
    </div>
    <div class="col2">
        <div class="col2_wrap">
            <h2>Категории</h2>
            <div class="category_wrap">
                <ul>
                    <?foreach($sport_types as $s):?>
                        <li class="category_item"><a href="javascript://"><?=$s['title'];?></a>
                            <div class="challenge_item">
                                <ul>
                                    <?
                                    $sport_id = $s['id'];
                                    if (isset($challenge[$sport_id]))
                                    {
                                        foreach($challenge as $c)
                                        {
                                            echo "<li><a href='javascript://'>" . $c['title'] . "</a></li>";
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </li>
                    <?endforeach;?>
                </ul>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('div.match_item').toggle(function() {
        $(this).find('div.match_description')
            .slideDown(100);
        $(this).addClass('match_item_open');
        $(this).find('p.match_info_more')
            .addClass('match_info_more_open');
    }, function() {
        $(this).removeClass('match_item_open');
        $(this).find('div.match_description')
            .slideUp(100);
        $(this).find('p.match_info_more')
            .removeClass('match_info_more_open');
    });

    $('li.category_item > a').toggle(function() {
        $(this).next().slideDown(100);
    }, function() {
        $(this).next().slideUp(100);
    });
</script>
