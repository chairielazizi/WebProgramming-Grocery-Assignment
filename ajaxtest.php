
<?php

    $aResult = array();

    if( !isset($_POST['functionname']) ) { $aResult['error'] = 'No function name!'; }

    if( !isset($_POST['arguments']) ) { $aResult['error'] = 'No function arguments!'; }

    if( !isset($aResult['error']) ) {

        switch($_POST['functionname']) {
            case 'add':
               if( !is_array($_POST['arguments']) || (count($_POST['arguments']) < 2) ) {
                   $aResult['error'] = 'Error in arguments!';
               }
               else {
                   $aResult['result'] = add(floatval($_POST['arguments'][0]), floatval($_POST['arguments'][1]));
               }
               break;

            default:
               $aResult['error'] = 'Not found function '.$_POST['functionname'].'!';
               break;
        }

    }
    function add($a,$b){
        $c=$a+$b;
        return $c;
      }
      function mult($a,$b){
        $c=$a*$b;
        return $c;
      }
      
      function divide($a,$b){
        $c=$a/$b;
        return $c;
      }
      echo json_encode($aResult);
      echo '<script> console.log('.$aResult['result'].');
      </script>';
      echo '<script> console.log("helo");
      </script>';
?>


