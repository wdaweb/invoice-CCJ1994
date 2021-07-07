<form action="api/add_award_number.php" method="post">

  <div>
    <div class="top">
      <span>本期為</span>
      <input class="year hvr" id="yeaript" type="number" name="year" min="<?=date("Y")-1;?>" max="<?=date("Y");?>" step="1"
      value="<?=date("Y");?>" required>
      <label for="yeaript">年</label>
            <select class="period hvr" id="monthipt" name="period" required>
              <option value="1">1 - 2</option>
              <option value="2">3 - 4</option>
              <option value="3">5 - 6</option>
              <option value="4">7 - 8</option>
              <option value="5">9 - 10</option>
              <option value="6">11 - 12</option>
            </select>
            <label for="monthipt">月</label>
    </div>

  </div>
<div class="line"></div>
  <table class="awardnumT">
    <tr>
      <td><label for="sprize">特別獎</label></td>
      <td class="awardNum">
        <input class="prize1" id="sprize" type="number" name="special_prize" min="00000001" max="99999999" required>
      </td>
      <td>$10,000,000</td>
    </tr>
    <tr>
      <td><label for="gprize">特&nbsp;&nbsp;&nbsp;&nbsp;獎</label></td>
        <td class="awardNum">
          <input class="prize1 hvr" id="gprize" type="number" name="grand_prize" min="00000001" max="99999999" required>
        </td>
        <td>$2,000,000</td>
    </tr>
    <tr>
      <td><label for="fprize">頭&nbsp;&nbsp;&nbsp;&nbsp;獎</label></td>
      <td class="awardNum">
          <input class="prize3 hvr" id="fprize" type="number" name="first_prize[]" min="00000001" max="99999999" required>
          <input class="prize3 hvr" type="number" name="first_prize[]" min="00000001" max="99999999" require>
          <input class="prize3 hvr" type="number" name="first_prize[]" min="00000001" max="99999999" require>
      </td>
      <td>$200,000</td>
    </tr>
    <tr>
      <td><label for="sixprize">增六獎</label></td>
      <td class="awardNum">
          <input class="prize4 hvr" id="sixprize" type="number" name="add_six_prize[]" min="001" max="999" required>
          <input class="prize4 hvr" type="number" name="add_six_prize[]" min="001" max="999">
          <input class="prize4 hvr" type="number" name="add_six_prize[]" min="001" max="999">
      </td>
      <td>$200</td>
    </tr>
    <tr>
    <td>二&nbsp;&nbsp;&nbsp;&nbsp;獎</td>
    <td><small class="sm">末7位數號碼與頭獎中獎號碼末7位相同</small></td>
    <td>$40,000</td>
  </tr>
  <tr>
    <td>三&nbsp;&nbsp;&nbsp;&nbsp;獎</td>
    <td><small class="sm">末6位數號碼與頭獎中獎號碼末6位相同</small></td>
    <td>$10,000</td>
  </tr>
  <tr>
    <td>四&nbsp;&nbsp;&nbsp;&nbsp;獎</td>
    <td><small class="sm">末5位數號碼與頭獎中獎號碼末5位相同</small></td>
    <td>$4,000</td>
  </tr>
  <tr>
    <td>五&nbsp;&nbsp;&nbsp;&nbsp;獎</td>
    <td><small class="sm">末4位數號碼與頭獎中獎號碼末4位相同</small></td>
    <td>$1,000</td>
  </tr>
  <tr>
    <td>六&nbsp;&nbsp;&nbsp;&nbsp;獎</td>
    <td><small class="sm">末3位數號碼與頭獎中獎號碼末3位相同</small></td>
    <td>$200</td>
  </tr>

      
    
  </table>
  <div >
    <input type="submit" value="" class="awlbtn">
  </div>
</form>