<div class="enter_area">
        <div class="btnPart">
          <a href="index.php"><div class="btn1"></div></a>
          <a href="invoice_list.php"><div class="btn2"></div></a>
          <a href="add_awards.php"><div class="btn3"></div></a>
          <a href="award_numbers.php"><div class="btn4"></div></a>
        </div>
        <div class="enterPart">
          <form action="api/add_invoice.php" method="post">
            <div class="date">
              <label for="date">日期</label>
              <input class="dateD hvr" id="date" name="date" type="date">
            </div>
            <div class="num">
              <label for="num">發票號碼</label> 
              <input class="num1 hvr" id="num" name="code" type="text">
              <input class="num2 hvr" name="number" type="number">
            </div>
            <div class="pay">
              <label for="pay">金額</label>
              <input class="pay1 hvr" id="pay" name="payment" type="number">
            </div>
            <!-- <div class="item">
              <label for="item">品項</label>
              <input class="item1 hvr" id="item" type="text">
            </div> -->
            <!-- <div class="note">
              <label for="note">備註</label>
              <textarea class="note1 hvr" name="note" id="note"></textarea>
            </div> -->
            <div>
              <input class="btnSave" type="submit" value="儲存">
            </div>
          </form>
        </div>
      </div>