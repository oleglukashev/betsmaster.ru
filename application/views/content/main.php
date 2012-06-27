<?=$header;?>
<div id="carcas-wrap">
    <div class="header-wrap">
        <div class="header-logo"><a href="/"><img src="../images/logo.png"></a></div>
    </div>
    <div class="content-wrap">
        <div class="col1-wrap">
            <h1>События</h1>
            <div class="matches-list-wrap">
                <?foreach($matches as $key=>$date):?>
                    <div class="matches-date">
                        <p><?=$date['date']['day'];?></p>
                        <p><?=$date['date']['month'];?></p>
                    </div>
                    <?foreach($date['matches'] as $key=>$match):?>
                        <div class="match-item-wrap<?if ($key%2==0):?> match-even<?endif;?>">
                            <div class="match-item-title">
                                <p class="match-time"><?=date('H:i', strtotime($match['time']));?> мск</p>
                                <div class="match-teams-wrap">
                                    <div><?=$match['team1'];?></div>
                                    <div class="match-teams-vs">&mdash;</div>
                                    <div><?=$match['team2'];?></div>
                                </div>
                            </div>
                            <div class="match-item-content">
                                <table>
                                    <?foreach($bets as $b):?>
                                        <tr>
                                            <td><?=$b['name'];?></td>
                                        </tr>
                                    <?endforeach;?>
                                </table>
                            </div>
                        </div>
                        <!--last elemrnt-->
                        <?if ($key == (count($date['matches']) - 1)):?>
                            <div class="match-item-wrap">
                                <div class="match-item-title"></div>
                            </div>
                        <?endif;?>
                    <?endforeach;?>
                <?endforeach;?>
            </div>
        </div>
        <div class="col2-wrap">
            <h2>Категории</h2>
            <div class="category-wrap">
                <?foreach($sport_types as $s):?>
                    <div class="category-item">
                        <p class="category-item-title"><?=$s['title'];?></p>
                        <?foreach($challenge as $c):?>
                            <?if ($c['sport_id'] == $s['id']):?>
                                <p><?=$c['title'];?></p>
                            <?endif;?>
                        <?endforeach;?>
                    </div>
                <?endforeach;?>
            </div>
        </div>
    </div>
    <div class="footer-wrap">
    </div>

</div>
<script type="text/javascript">
    $('div.match-item-title').toggle(function() {
        $(this).next().slideDown(100);
    }, function() {
        $(this).next().slideUp(100);
    });

$('div.category-item').click(function() {
    $('div.category-item').removeClass('category-select');
    $(this).addClass('category-select');
})
</script>
