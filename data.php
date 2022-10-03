<?php
header('Content-Type: text/html; charset=utf-8');
  
$conn = mysqli_connect('localhost', 'root', '', 'data') or die ('Không thể kết nối đến CSDL');
mysqli_set_charset($conn, 'utf8');
  
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
  
if ($page < 1) {
    $page = 1;
}
  
$limit = 3;
  
$start = ($limit * $page) - $limit;
  
$sql = "select * from tb_customer limit $start,".($limit + 1);
  
$query = mysqli_query($conn, $sql) or die ('Lỗi câu truy vấn');
  
$result = array();
while ($row = mysqli_fetch_array($query))
{
    array_push($result, $row);
}
 
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

    sleep(1);
     
    die (json_encode($result));
}
else 
{
    $total = count($result);

    for ($i = 0; $i < $total - 1; $i++)
    {
        echo '<div class="item">';
            echo $result[$i]['id'].' - '.$result[$i]['name'].' - '.$result[$i]['website'];
        echo '</div>';
    }
}
 
?>