<?

$array = [8, 7, 6, 1, 2, 4, 3, 5, 6, 7, 8, 10, 12, 14, 15, 17, 18, 19, 2];

function GetRanges( $aNumbers ) {
    $aGroups = array();
    for( $i = 0; $i < count( $aNumbers ); $i++ ) {
      if( $i > 0 && ( $aNumbers[$i-1] == $aNumbers[$i] - 1 ))
        array_push( $aGroups[count($aGroups)-1], $aNumbers[$i] );
      else
        array_push( $aGroups, array( $aNumbers[$i] )); 
    }
    $aRanges = array();
    foreach( $aGroups as $aGroup ) {
      if( count( $aGroup ) == 1 )
        $aRanges[] = $aGroup[0];
      else
        $aRanges[] = $aGroup[0] . '-' . $aGroup[count($aGroup)-1];
    }
    return implode( ',', $aRanges );
  }
  
  echo( GetRanges( $array ));