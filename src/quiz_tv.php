<?php

echo "テレビの視聴時間登録\n";

$watch_views = [];


//テレビの合計視聴時間
// $time = 0;
// $time += (int) $watch_tv['view_minutes'];
// $watch_tv['sum_time'] = (string) $time;

while (true) {
  $watch_tv = [];
  $time = 0;

  //テレビのチャンネル
  echo "\nテレビのチャンネル:";
  $watch_tv['channel'] = fgets(STDIN);

  //視聴分数
  echo "視聴分数:";
  $watch_tv['view_minutes'] = fgets(STDIN);
  // var_dump($watch_tv['view_minutes']);

  //視聴回数
  echo "視聴回数:";
  $watch_tv['views'] = fgets(STDIN);

  $watch_views[] = $watch_tv;

  foreach ($watch_views as $watch_view) {
    $time += (int) $watch_view['view_minutes'];
  }

  // var_export($watch_views);

  echo "\nテレビの合計視聴時間" . $time . PHP_EOL;
  echo '-------------------------------------' . PHP_EOL;
  for ($i = 0; $i < count($watch_views); $i++) {
    echo 'テレビのチャンネル' . $watch_views[$i]['channel'];
    echo '視聴分数' . $watch_views[$i]['view_minutes'];
    echo '視聴回数' . $watch_views[$i]['views'] . PHP_EOL;
  }
}
