<?php
function get_item_html($id, $item)    # $item은 $catalog[$id] 
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

  if ($category == null) {    # 만약 $category가 books,music,movies 이런것들이 아니고 null 이라면
    return array_keys($catalog); # catalog 배열의 key를 return한다. ex) 101, 102, 103 .... 
  }

  $output = array();    # 빈 배열 만듬.
  foreach ($catalog as $id => $item) {    # id라는 key와 item이라는 value 둘다 가져온다는 뜻 
    if (strtolower($category) == strtolower($item["category"])) { # 내가 검색한 books라는 $category가 모든 catalog 배열 안에 있는 category의 이름과 똑같다면
      $sort = $item["title"];  # #sort는 title의 value 
      $output[$id] = $sort; # 여기서 $id는 catalog의 101, 102, 103 이런것들을 가져와 output 배열에 넣는다. output은 배열 
      #echo $id;
    }
  }
  asort($output);
  return array_keys($output);
}
