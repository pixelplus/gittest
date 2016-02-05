<?if(!($USER->IsAuthorized())){?>
<img src="/img/06.gif" width="27" height="25"  /> <span class="alink" data-url="/personal/">Вход / Регистрация</span>
<?}else{?>
<img src="/img/06.gif" width="27" height="25"  style="margin-left: 45px;"/> <span class="alink" data-url="/personal/">Личный&nbsp;кабинет</span>
<?};?>