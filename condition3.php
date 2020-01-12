<!DOCTYPE html>
<html>
<head>
  <meta charset = "UTF-8">
  <title>中医学的体質診断</title>
  <link rel = "stylesheet" href = "condition.css">
</head>
<body>
  <h1>中医学的体質診断</h1>
  <h2><a href = "about.php">中医学とは？  ＆  基本用語解説</a></h2>
  <p>現在の体調に最も当てはまるブロックを選択してください</p>
  <form action = "condition_receive2.php" method = "POST">
    <div id = "container">
      <div>
        <input type = "radio" name = "condition" value ="気虚(ききょ)" checked>
        <ul>
          <li>倦怠感</li>
          <li>風邪を引きやすい</li>
          <li>息切れしやすい</li>
          <li>気力に乏しい</li>
          <li>いつも汗ばんでる</li>
        </ul>
      </div>
      <div>
        <input type = "radio" name = "condition" value = "気滞(きたい)">
        <ul>
          <li>喉に異物感がある</li>
          <li>イライラしやすい</li>
          <li>月経不順</li>
          <li>寝付きが悪い</li>
          <li>胸やお腹に圧迫感がある</li>
        </ul>
      </div>
      <div>
        <input type = "radio" name = "condition" value = "血虚(けっきょ)">
        <ul>
          <li>毛髪に艶がない</li>
          <li>目が霞む</li>
          <li>精神不振</li>
          <li>手足が痺れる</li>
          <li>夜間に目が覚める</li>
        </ul>
      </div>
      <div>
        <input type = "radio" name = "condition" value = "血瘀(けつお)">
        <ul>
          <li>顔色が暗い</li>
          <li>肌がかさつく</li>
          <li>針を刺すような痛みがある</li>
          <li>唇や爪が紫色</li>
          <li>肩こり</li>
        </ul>
      </div>
      <div>
        <input type = "radio" name = "condition" value = "陰虚(いんきょ)">
        <ul>
          <li>暑がり</li>
          <li>のぼせやすい</li>
          <li>喉が渇く</li>
          <li>顔色が紅潮している</li>
          <li>便秘気味</li>
        </ul>
      </div>
      <div>
        <input type = "radio" name = "condition" value = "陽虚(ようきょ)">
        <ul>
          <li>寒がり</li>
          <li>手足が冷える</li>
          <li>食欲不振</li>
          <li>顔色が白い</li>
          <li>下痢気味</li>
        </ul>
      </div>
    </div>
    <div class = "submitBtn">
      <input type = "submit" value = "決定">
    </div>
  </form>
</body>
</html>
