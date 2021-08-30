<?php
function get_item_html($id, $item)    # $id는 101,201같은 key, $item은 배열
{
  $output = "<li><a href='#'><img src='"
    . $item["img"] . "' alt='"
    . $item["title"] . "' />"
    . "<p>View Details</p>"
    . "</a><li>";
  return $output;
}

function array_category($catalog, $category)  # $catalog는 컨텐츠가 들어있는 배열, $category는 $catalog안에 들어있는 카테고리 이름 
{
  $output = array();    # 빈 배열 만듬.
  foreach ($catalog as $id => $item) {    # id라는 key와 item이라는 value 둘다 가져온다는 뜻, + 여기서 $item이 또 배열이다. 
    if ($category == null or strtolower($category) == strtolower($item["category"])) { # 내가 검색한 books라는 $category가 모든 catalog 배열 안에 있는 category의 이름과 똑같다면
      $sort = $item["title"];  # #sort는 title의 value 
      $output[$id] = $sort; # 여기서 $id는 catalog의 101, 102, 103 이런것들을 가져와 output 배열에 넣는다. output은 배열 
    }
  }
  asort($output);
  return array_keys($output); # 여러개의 key가 들어있는 배열을 return 한다. 
}
