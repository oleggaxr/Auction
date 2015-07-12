<div class= "lots">
  <div class= "wrapper">
    <?php foreach($item as $it): ?>
    <div class="item" name="item<?=$it['inum'];?>">
      <div class="title">
        <div class="desc_text"><?=$it['ititle'];?></div>
      </div>
      <a href="/product/" class="postid">
            <div class="picture">
              <img src="/assets/img/<?=$it['image'];?>">
              <div style="display: none;"></div>
            </div>
            </a>
      <div class="control"><div style="margin:0; height: 0; padding: 0;">&nbsp;</div>
              <div class="realprice rad_11px"><span class="bigspan"><?=$it['iprice'];?></span> руб.</div>
              <div class="complitdate" title="Дата и время завершения аукциона" alt="Дата и время завершения аукциона">
                <div class="data-dt"><?=$it['idate'];?> <?=$it['itime'];?></div></div>
                <div class="userinfo" title="Последний пользователь, сделавший ставку" alt="Последний пользователь, сделавший ставку">
                  <div><div class="pnlgraytext"><?=$it['iuser'];?></div></div></div>
                  <?php
                  if ($it['istatus'] == 'active'){
                     echo "<div class='pnlorange'>Ставка</div><input type='hidden' name='tmstate' id='tmstate' value=''>";
                   }
                   if ($it['istatus'] == 'completed'){
                     echo "<div class='pnlotcompleted'>Завершен</div><input type='hidden' name='tmstate' id='tmstate' value=''>";
                   }
                   if ($it['istatus'] == 'future'){
                     echo "<div class='pnlotfuture'>Скоро</div><input type='hidden' name='tmstate' id='tmstate' value=''>";
                   }
                  ?>
      </div>
    </div>
  <?php endforeach;?>
  </div>
 </div>
