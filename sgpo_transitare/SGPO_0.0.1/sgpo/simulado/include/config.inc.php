<?
function query($sql) {
//  private $host, $user, $pass, $database, $db;

  $host="216.157.145.55";
  $user="apolar_admin";
  $pass="Tcfdt1614";
  $database = "apolar_moodle";

  $db = mysql_connect( $host, $user, "$pass") or die("Erro!! ".mysql_error());
  mysql_select_db("$database", $db) or die("-Erro!! ".mysql_error());

  $rtn = mysql_query($sql, $db) or die("-ERRO!<hr>$sql<hr>".mysql_error());

  mysql_close($db);

  return $rtn;
}

function dmaTOamd($data) {
  $dia = $mes = $ano = '';

  if ($data != '0000-00-00')
    list ($dia, $mes, $ano) = split ('[/.-]', substr($data,0,10));

  $rtn = (($dia != '')?"$ano-$mes-$dia":'&nbsp');

  return $rtn;
}

function ymdTOdmy($data) {
  $dia = $mes = $ano = '';

  if (substr($data,0,10) != '0000-00-00')
    list ($ano, $mes, $dia) = split ('[/.-]', substr($data,0,10));

  $rtn = (($dia != '')?"$dia/$mes/$ano":'&nbsp');

  return $rtn;
}

?>
