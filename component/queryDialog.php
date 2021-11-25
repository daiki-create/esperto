


<div class="mask" id="query-mask"
onclick="close_query_dialog()">

</div>
<div id="query-dialog" class="query-dialog">
    <form action="../queryAction.php" class="query-form ">
        <label for="subject">お問い合わせ内容</label>
        <select name="subject" id="subject" class="form-element input-subject">
            <option value="入部希望">入部希望</option>
            <option value="練習試合">練習試合</option>
            <option value="質問">質問</option>

            <option value="その他">その他</option>
        </select>
        <br>
        <br>
        <input type="email" name="name"
               placeholder="メールアドレス" class="form-element input-name"
        style="border: solid 1px cornflowerblue;"><br>
        <textarea name="content" id="" cols="60" rows="20"
                  placeholder="本文" class="form-element"
        style="border: solid 1px cornflowerblue;"></textarea><br>
        <input type="submit" value="送信" class="send-btn"
        style="background-color: cornflowerblue;
        color: white;
        border: none;
　　      ">
    </form>
</div>
<script>
    function close_query_dialog() {
        document.getElementById("query-mask").style.display="none";
        document.getElementById("query-dialog").style.display="none";
    }
</script>
