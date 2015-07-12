<div class= "lots">
  <div class= "wrapper">
    <?php foreach($item as $it): ?>
    <div class="item" name="item<?=$it['inum'];?>">
      <div class="title">
        <div class="desc_text"><?=$it['ititle'];?></div>
      </div>
      <a href="/product/10299" class="postid">
            <div class="picture">
              <img src="/img.php?id=5943">
              <div style="display: none;"></div>
            </div>
            </a>
      <div class="control"><div style="margin:0; height: 0; padding: 0;">&nbsp;</div>
              <div class="realprice rad_11px"><span class="bigspan">160,1</span> руб.</div>
              <div class="complitdate" title="Дата и время завершения аукциона" alt="Дата и время завершения аукциона">
                <div class="data-dt">11.07.2015 22:19:14</div></div>
                <div class="userinfo" title="Последний пользователь, сделавший ставку" alt="Последний пользователь, сделавший ставку">
                  <div><div class="pnlgraytext"><?=$it['iuser'];?></div></div></div>
              <div class="pnlorange">АУКЦИОН ЗАВЕРШЕН</div><input type="hidden" name="tmstate" id="tmstate" value="1436645486">
      </div>
    </div>
  <?php endforeach;?>
  </div>
 </div>
