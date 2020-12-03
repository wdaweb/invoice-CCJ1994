<form action="api/add_award_number.php" method="post">
<div>
  <div>
    請輸入期別
  </div>
  <div>
  <input type="number" name="year" min="<?=date("Y")-1;?>" max="<?=date("Y");?>" step="1"
            value="<?=date("Y");?>">年
          <select name="period">
            <option value="1">1 ~ 2</option>
            <option value="2">3 ~ 4</option>
            <option value="3">5 ~ 6</option>
            <option value="4">7 ~ 8</option>
            <option value="5">9 ~ 10</option>
            <option value="6">11 ~ 12</option>
          </select>月
  </div>
</div>
<div class="line"></div>
  <table class="awardnumT">
    <tr>
      <td>特別獎</td>
      <td class="awardNum">
        <input type="number" name="special_prize" min="00000001" max="99999999">
      </td>
      <td>$10,000,000</td>
    </tr>
    <tr>
      <td>特&nbsp;&nbsp;&nbsp;&nbsp;獎</td>
        <td class="awardNum">
          <input type="number" name="grand_prize" min="00000001" max="99999999">
        </td>
        <td>$2,000,000</td>
    </tr>
    <tr>
      <td>頭&nbsp;&nbsp;&nbsp;&nbsp;獎</td>
      <td class="awardNum">
          <input type="number" name="first_prize[]" min="00000001" max="99999999">
          <input type="number" name="first_prize[]" min="00000001" max="99999999">
          <input type="number" name="first_prize[]" min="00000001" max="99999999">
      </td>
      <td>$200,000</td>
    </tr>
    <tr>
      <td>增六獎</td>
      <td class="awardNum">
      <input type="number" name="add_six_prize[]" min="001" max="999">
          <input type="number" name="add_six_prize[]" min="001" max="999">
          <input type="number" name="add_six_prize[]" min="001" max="999">
      </td>
      <td>$200</td>
    </tr>
    <tr>
    <td>二&nbsp;&nbsp;&nbsp;&nbsp;獎</td>
    <td><small>末7位數號碼與頭獎中獎號碼末7位相同</small></td>
    <td>$40,000</td>
  </tr>
  <tr>
    <td>三&nbsp;&nbsp;&nbsp;&nbsp;獎</td>
    <td><small>末6位數號碼與頭獎中獎號碼末6位相同</small></td>
    <td>$10,000</td>
  </tr>
  <tr>
    <td>四&nbsp;&nbsp;&nbsp;&nbsp;獎</td>
    <td><small>末5位數號碼與頭獎中獎號碼末5位相同</small></td>
    <td>$4,000</td>
  </tr>
  <tr>
    <td>五&nbsp;&nbsp;&nbsp;&nbsp;獎</td>
    <td><small>末4位數號碼與頭獎中獎號碼末4位相同</small></td>
    <td>$1,000</td>
  </tr>
  <tr>
    <td>六&nbsp;&nbsp;&nbsp;&nbsp;獎</td>
    <td><small>末3位數號碼與頭獎中獎號碼末3位相同</small></td>
    <td>$200</td>
  </tr>

      
    
  </table>
  <div class="">
    <input type="submit" value="儲存" class="mx-2 btn btn-primary">
    <input type="reset" value="清空" class="mx-2 btn btn-warning">
  </div>
</form>