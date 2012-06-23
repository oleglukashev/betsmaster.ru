<?=$header;?>
<div id="carcas-wrap">
    <div class="header-wrap">
    </div>
    <div class="content-wrap">
        <div class="col1-wrap">
            <h1>События</h1>
            <div class="matches-list-wrap">
                <div class="matches-date">
                    <p>30</p>
                    <p>сентября</p>
                </div>
                <div class="match-item-wrap match-even">
                    <p class="match-time">20:00</p>
                    <div class="match-teams-wrap">
                        <div>Спартак М.</div>
                        <div class="match-teams-vs">&mdash;</div>
                        <div>Локомотив М.</div>
                    </div>
                </div>
                <div class="match-item-wrap match-odd">
                    <p class="match-time">20:00</p>
                    <div class="match-teams-wrap">
                        <div>Спартак М.</div>
                        <div class="match-teams-vs">&mdash;</div>
                        <div>Локомотив М.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col2-wrap">
            <h2>Категории</h2>
            <div class="category-wrap">
                <ul>
                    <li class="category-select">
                        <p><span>Футбол</span></p>
                        <ul>
                            <li><span>Чемпионат России</span></li>
                            <li><span>Чемпионат России</span></li>
                            <li><span>Чемпионат России</span></li>
                            <li><span>Чемпионат России</span></li>
                            <li class="subcategory-select"><span>Чемпионат России</span></li>
                            <li><span>Чемпионат России</span></li>
                            <li><span>Чемпионат России</span></li>
                            <li><span>Чемпионат России</span></li>
                            <li><span>Чемпионат России</span></li>
                            <li><span>Чемпионат России</span></li>
                        </ul>
                    </li>
                    <li><span>Футбол</span></li>
                    <li><span>Футбол</span></li>
                    <li><span>Футбол</span></li>
                    <li><span>Футбол</span></li>
                    <li><span>Футбол</span></li>
                    <li><span>Футбол</span></li>
                    <li><span>Футбол</span></li>
                    <li><span>Футбол</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-wrap">
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
