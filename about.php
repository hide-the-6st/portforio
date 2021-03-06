<?php

require_once('text.php');

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset = "UTF-8">
  <title>中医学的体質診断</title>
</head>
<body>
  <h2>◎中医学とは◎</h2>
  <p>
    「中医学？東洋医学じゃないの？」と思われた方もいるかもしれません。<br>
    一口に東洋医学といっても、日本の漢方やチベット医学、インドのアーユルヴェーダなど色々ありますが、<br>
    その中でも中国で発達した医学を<u>「<ruby>中医学<rt>ちゅういがく</rt></ruby>」</u>と呼びます。<br>
    陰陽学説(太極マークのやつ)や五行学説（五芒星っぽいやつ）、<br>
    <ruby>経絡<rt>けいらく</rt></ruby>や<ruby>気血<rt>きけつ</rt></ruby>など、独特の生理観を持っています。<br>
    とても全ては網羅できませんので、このサイトでは<u>陰陽</u>と<u>気血</u>に絞って解説します。
  </p>
  <h2>◎基本用語解説◎</h2>
  <h3>◆陰陽とは◆</h3>
  <p>
    一言でいえば、「二大属性」です。<br>
    そして、この世のあらゆる事物は陰と陽、二つの性質のどちらかに属すると考えるのが陰陽学説です。<br>
    一部ですが例を挙げます。<br>
    陽 : 活動、温熱、明、上、外、昼、男、気、ソフト(機能的なもの)<br>
    陰 : 沈静、寒冷、暗、下、内、夜、女、血、ハード(物質的なもの)<br>
    <br>
    具体例を示しましたが、昼が夜になり、朝を経て再び昼になるように、<br>
    また熱いものが時間とともに冷めたり、冷え切っていた手がいつの間にか熱を帯びていたりするように、<br>
    陰と陽は絶対的なものではなく、絶えず移り変わる<u>相対的</u>なものです。<br>
    <br>
    人体においては、陰陽のバランスの乱れが様々な不調となって現れます。<br>
    何かの原因で陰が弱まると、相対的に陽が強まり、顔色の紅潮、暑がりなどの「熱」の症状を呈しますし、<br>
    逆に陽が弱まれば、相対的に陰が強まり、顔面蒼白、寒がりなどの「冷え」の症状を見せます。<br>
    中医学では、陰陽のバランスが保たれている状態を健康体であると考えます。
  </p>
  <h3>◆気血とは◆</h3>
  <ul>
    <li>気について</li>
    <p>
      人体を構成する基本物質であり、生命活動のエネルギー源です。<br>
      両親から受け継ぐ<u>先天的な気</u>と、飲食物を消化・吸収することで作られる<u>後天的な気</u>があります。<br>
      <br>
      人体を成長・発育させたり、体を温めたり、血液を運んだり、免疫機能を発揮したり、<br>
      汗や尿などの体液が漏れ出るのを防いだりと、多種多様な働きを持っています。<br>
      <br>
      そのため、何かの原因で気を消耗したり、気の生成が不足したり、気の流れが阻害されると<br>
      身体各所で様々な不調を来すことになります。<br>
    </p>
    <li>血について</li>
    <p>
      全身に栄養を供給し、潤す働きがあります(血の<ruby>滋養<rt>じよう</rt></ruby>作用といいます)。<br>
      飲食物を消化・吸収することで作られるもので、気の働きによって全身に送られます。<br>
      <br>
      血が充実していれば、肌や毛髪は色艶良く、筋肉は強くしなやかで、関節もスムーズに動きますが、<br>
      血の不足や循環不全が起こると、毛髪は艶なく、手足の痺れなどの感覚異常、運動機能の低下、<br>
      霞み・視力低下などの目の不調も現れるようになります。<br>
      <br>
      また精神や意識の活動は、血を消費して行われます。<br>
      そのため、血が不足すると、精神不振や不安感、睡眠障害などメンタル面の症状が現れるようになります。<br>
    </p>
    <li>気と血の関係について</li>
    <p>
      中医学には「<u><ruby>気行血行<rt>きこうけっこう</rt></ruby></u>」、そして「<u><ruby>不通則痛<rt>ふつうそくつう</rt></ruby>、
      <ruby>通則不痛<rt>つうそくふつう</rt></ruby></u>」という言葉があります。<br>
      <br>
      前者は、気が行けば血も行く、つまり、気の流れが良ければ血の流れも良い、という意味です。<br>
      逆に、気の流れが悪くなれば血の流れも悪くなります。<br>
      このように、気の不足や運行不全により、血の循環が影響を受けることになります。<br>
      <br>
      後者は、通じなければ痛み、通じれば痛まない、<br>
      つまり、気血の流れが悪ければ痛みが生じ、気血の流れが良ければ痛みは生じない、ということです。<br>
      例え気血が充実していたとしても、何かの原因で気血の流れが阻害されれば痛みが生じます。<br>
      中医学では、気血の過不足だけでなく、気血の流れの良否も重要視されます。
      <br>
    </p>
  </ul>
  <p><small><?php echo $references;?></small></p>
</body>
</html>
