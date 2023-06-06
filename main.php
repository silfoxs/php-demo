<?php
// 生成一个四行的诗句
$words = array("风","云","雨","雷","山","水","花","草","日","月","星","辰");
$rhymes = array("a","e","i","o","u");
$poem = "";
for ($i = 0; $i < 4; $i++) {
  // 每行七个字
  $line = "";
  for ($j = 0; $j < 7; $j++) {
    // 随机选择一个字
    $word = $words[array_rand($words)];
    // 避免重复
    while (strpos($line, $word) !== false) {
      $word = $words[array_rand($words)];
    }
    // 添加到诗句中
    $line .= $word;
  }
  // 第二和第四行要押韵
  if ($i == 1 || $i == 3) {
    // 随机选择一个韵母
    $rhyme = $rhymes[array_rand($rhymes)];
    // 替换最后一个字的韵母
    $line = mb_substr($line, 0, -1) . $rhyme;
  }
  // 添加到诗歌中
  $poem .= $line . "\n";
}
// 输出诗歌
echo $poem;