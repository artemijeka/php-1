
<form class="card-dog__form" method="post" id="form">
    <div class="<?=$h3ReserveRed;?>">
        <h3><?=$h3ReservePuppy;?></h3>
    </div>
    <input size="32" type="text" name="userName" size="24" placeholder="Ваше имя" value="<?=$userName;?>">
    <br>
    <br>
    <!-- <label class="user-phone__error" for="userPhone"><?=$labelPhoneContent;?></label>
	<br> -->
    <input size="32" type="text" name="userPhone" size="24" placeholder="Ваш телефон 7(846)1234567" id="userPhone" value="<?=$userPhone;?>">
    <br>
    <br>
    <input size="32" type="email" name="userEmail" size="24" placeholder="Ваш email who@where.ru" id="userEmail" value="<?=$userEmail;?>">
    <br>
    <br>
    <input type="checkbox" name="maleOrFemale[]" id="male" value="male">
    <label for="male">Кобель</label>
    <br>
    <input type="checkbox" name="maleOrFemale[]" id="female" value="female">
    <label for="female">Сука</label>
    <br>
    <br>
    <textarea placeholder="Можете добавить ваши пожелания, сообщение и вообще любую информацию которую сочтете нужной указать..." name="userMessage" cols="56" rows="8" style="overflow: hidden"></textarea>
    <br>
    <br>
    <input type="submit" name="doReserve" value="Записаться на щенка">
</form>