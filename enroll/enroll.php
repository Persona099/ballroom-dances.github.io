<?php
$fio = $_POST['fio'];
$tel = $_POST['tel'];
if(empty($fio)||empty($tel)){
  response(false,"Данные не заполнены");
} else{
  $tel = str_replace("+", "", $tel);
  $length = strlen($tel);
  if(($length >= 5 && $length <= 7) || $length == 11){
    if(is_numeric($tel)){
      if(strlen($fio) <= 100){
        response(true,"Вы успешно записались");
        saveData();
      } else {
        response(false,"Поле ФИО слишком длинное!");
      }
    } else {
      response(false,"Телефонный номер имеет неверный формат!");
    }
  } else {
    response(false,"Телефонный номер имеет неверный формат!");
  }

}
function response($status, $msg){
  $arr = [
    "status" => $status,
    "msg" => $msg
  ];
  echo json_encode($arr);
}
function saveData() {
  $file_data = date("[d.m.y H:i:s]")." ".$_POST['fio']." ".$_POST['tel']."<br>";
  $file_data .= file_get_contents('database.html');
  file_put_contents('database.html', $file_data);
}

?>
