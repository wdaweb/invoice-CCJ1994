<div class="enter_area">
        <div class="btnPart">
          <a href="index.php"><div class="btn1"></div></a>
          <a href="invoice_list.php"><div class="btn2"></div></a>
          <a href="?do=add_awards1"><div class="btn3"></div></a>
          <a href="award_numbers.php"><div class="btn4"></div></a>
        </div>
        <div class="enterPart">
          <form action="api/add_invoice.php" method="post">
            <div class="date">
              <label for="date">日期</label>
              <input class="dateD hvr" id="date" name="date" type="date">
              <?php errFeedBack('date');?>
            </div>
            <div class="num">
              <div class="numCode">
                <label for="numC">發票字軌英文</label> 
                <input class="num1 hvr" id="numC" name="code" type="text" size="2">
                <?php errFeedBack('code');?>
              </div>
              <div class="numNum">
                <label for="numN">號碼</label> 
                <input class="num2 hvr" id="numN" name="number" type="number"> 
                <?php errFeedBack('number');?>
              </div>
            </div>
            <div class="pay">
              <label for="pay">金額</label>
              <input class="pay1 hvr" id="pay" name="payment" type="number" min="0">
            </div>
            <div class="item">
              <label for="item">品項</label>
              <input class="item1 hvr" id="item" name="item" type="text">
            </div>
            <div class="note">
              <label for="note">備註</label>
              <textarea class="note1 hvr" name="note" id="note"></textarea>
            </div>
            <div>
              <input class="btnSave" type="submit" value="儲存">
            </div>
          </form>
        </div>
      </div>