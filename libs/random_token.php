<?

function getToken($len = 40){
  $token = '';
  for ($i = 0; $i < $len; $i++) {
    $ord = 0;
    switch(rand(1,3)) {
      case 1: // 0 - 9
        $ord = rand(48,57);
        break;
      case 2: // A - Z
        $ord = rand(65,90);
        break;
      case 3: // a - z
        $ord = rand(97,112);
        break;
    }
    $token = $token.chr($ord);
  }

  return $token;
}
?>
