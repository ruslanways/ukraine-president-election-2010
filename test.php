<?php

$out = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="/style.css">
<script src="/script.js"></script>
<title>Вибір</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Вибір" />
<meta name="keywords" content="Вибір" />
<meta name="robots" content="all" />
</head>

<body bgcolor="#FFFFFF" text="#000000">
<table width=100% height=100% border="0"  cellpadding="0" cellspacing="0" >
  <tr valign="top">
    <td width="200" height="600" background="/img/left.jpg"  bgcolor="#FFFFFF">
    <div id="coolmenu">
<a href="/index.html" class="style24" 
onMouseover="showtext(\'Почему важен анализ любых материалов, почему важно читать между строк, почему важны даже самые общие фразы... \')"
onMouseout="hidetext()">Главная  </a>

<a  href="/test.php" 
onMouseover="showtext(\'Выбери своего кандидата по обещаным фактам\')"
onMouseout="hidetext()">Тестирование: &quot;Мой Президент&quot; </a>

<a href="/programs.html"
onMouseover="showtext(\'Предвыборные программы кандидатов в Президенты\')"
onMouseout="hidetext()">Программы кандидатов  </a>
<a href="/contact.html" onMouseover="showtext(\'Ваши пожелания и предложения по поводу проекта, наши контакты, сотрудничество\')"
onMouseout="hidetext()">Ваши предложения   </a>

<div id="tabledescription"></div>

</div>
<p>
</p>
    </td>
    <td width="648">
    <img src="/img/top.jpg" class="center-img"/>';
// if($_POST['action']=='ok')
if (isset($_POST['action'])) {
        $out .= '<br><h2><font style="font-style: italic; font-size: 26px; color: #4b83a6"><b>&nbsp;&nbsp;Результаты тестирования:</font></b></h2>';

        $ok = 1;

        // $t = '';
        $t = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

        $options = '';
        $options = file("db/r.txt");
        $sf = count($options);

        for ($j = 0; $j < $sf; $j++) {
                $m = explode("|", trim($options[$j]));
                // if(!$_POST['q'.$m[0]])
                if (!isset($_POST['q' . $m[0]])) {
                        $out .= 'Ошибка: Вы ответили не на все вопросы!<br><br><a href="javascript:history.back(1)"><b>« Вернуться назад к вопросам!</a>';
                        $ok = 0;
                        break;
                }
                switch ($_POST['q' . $m[0]]) {
                        case '1':
                                $t[1] = $t[1] + $m[1];
                                $t[2] = $t[2] + $m[2];
                                $t[3] = $t[3] + $m[3];
                                $t[4] = $t[4] + $m[4];
                                $t[5] = $t[5] + $m[5];
                                $t[6] = $t[6] + $m[6];
                                $t[7] = $t[7] + $m[7];
                                $t[8] = $t[8] + $m[8];
                                $t[9] = $t[9] + $m[9];
                                $t[10] = $t[10] + $m[10];
                                break;
                        case '2':
                                $t[1] = $t[1] + $m[11];
                                $t[2] = $t[2] + $m[12];
                                $t[3] = $t[3] + $m[13];
                                $t[4] = $t[4] + $m[14];
                                $t[5] = $t[5] + $m[15];
                                $t[6] = $t[6] + $m[16];
                                $t[7] = $t[7] + $m[17];
                                $t[8] = $t[8] + $m[18];
                                $t[9] = $t[9] + $m[19];
                                $t[10] = $t[10] + $m[20];
                                break;
                        case '3':
                                $t[1] = $t[1] + $m[21];
                                $t[2] = $t[2] + $m[22];
                                $t[3] = $t[3] + $m[23];
                                $t[4] = $t[4] + $m[24];
                                $t[5] = $t[5] + $m[25];
                                $t[6] = $t[6] + $m[26];
                                $t[7] = $t[7] + $m[27];
                                $t[8] = $t[8] + $m[28];
                                $t[9] = $t[9] + $m[29];
                                $t[10] = $t[10] + $m[30];
                                break;
                        case '4':
                                $t[1] = $t[1] + $m[31];
                                $t[2] = $t[2] + $m[32];
                                $t[3] = $t[3] + $m[33];
                                $t[4] = $t[4] + $m[34];
                                $t[5] = $t[5] + $m[35];
                                $t[6] = $t[6] + $m[36];
                                $t[7] = $t[7] + $m[37];
                                $t[8] = $t[8] + $m[38];
                                $t[9] = $t[9] + $m[39];
                                $t[10] = $t[10] + $m[40];
                                break;
                        case '5':
                                $t[1] = $t[1] + $m[41];
                                $t[2] = $t[2] + $m[42];
                                $t[3] = $t[3] + $m[43];
                                $t[4] = $t[4] + $m[44];
                                $t[5] = $t[5] + $m[45];
                                $t[6] = $t[6] + $m[46];
                                $t[7] = $t[7] + $m[47];
                                $t[8] = $t[8] + $m[48];
                                $t[9] = $t[9] + $m[49];
                                $t[10] = $t[10] + $m[50];
                                break;
                        case '6':
                                $t[1] = $t[1] + $m[51];
                                $t[2] = $t[2] + $m[52];
                                $t[3] = $t[3] + $m[53];
                                $t[4] = $t[4] + $m[54];
                                $t[5] = $t[5] + $m[55];
                                $t[6] = $t[6] + $m[56];
                                $t[7] = $t[7] + $m[57];
                                $t[8] = $t[8] + $m[58];
                                $t[9] = $t[9] + $m[59];
                                $t[10] = $t[10] + $m[60];
                                break;
                        case '7':
                                $t[1] = $t[1] + $m[61];
                                $t[2] = $t[2] + $m[62];
                                $t[3] = $t[3] + $m[63];
                                $t[4] = $t[4] + $m[64];
                                $t[5] = $t[5] + $m[65];
                                $t[6] = $t[6] + $m[66];
                                $t[7] = $t[7] + $m[67];
                                $t[8] = $t[8] + $m[68];
                                $t[9] = $t[9] + $m[69];
                                $t[10] = $t[10] + $m[70];
                                break;
                        case '8':
                                $t[1] = $t[1] + $m[71];
                                $t[2] = $t[2] + $m[72];
                                $t[3] = $t[3] + $m[73];
                                $t[4] = $t[4] + $m[74];
                                $t[5] = $t[5] + $m[75];
                                $t[6] = $t[6] + $m[76];
                                $t[7] = $t[7] + $m[77];
                                $t[8] = $t[8] + $m[78];
                                $t[9] = $t[9] + $m[79];
                                $t[10] = $t[10] + $m[80];
                                break;
                        case '9':
                                $t[1] = $t[1] + $m[81];
                                $t[2] = $t[2] + $m[82];
                                $t[3] = $t[3] + $m[83];
                                $t[4] = $t[4] + $m[84];
                                $t[5] = $t[5] + $m[85];
                                $t[6] = $t[6] + $m[86];
                                $t[7] = $t[7] + $m[87];
                                $t[8] = $t[8] + $m[88];
                                $t[9] = $t[9] + $m[89];
                                $t[10] = $t[10] + $m[90];
                                break;
                        case '10':
                                $t[1] = $t[1] + $m[91];
                                $t[2] = $t[2] + $m[92];
                                $t[3] = $t[3] + $m[93];
                                $t[4] = $t[4] + $m[94];
                                $t[5] = $t[5] + $m[95];
                                $t[6] = $t[6] + $m[96];
                                $t[7] = $t[7] + $m[97];
                                $t[8] = $t[8] + $m[98];
                                $t[9] = $t[9] + $m[99];
                                $t[10] = $t[10] + $m[100];
                                break;
                }
        }


        $options2 = '';
        $options2 = file("db/t.txt");

        if ($ok) {
                for ($i = 1; $i <= 10; $i++) {
                        for ($j = $i + 1; $j <= 10; $j++) {
                                if ($t[$i] < $t[$j]) {
                                        $k = $t[$i];
                                        $t[$i] = $t[$j];
                                        $t[$j] = $k;

                                        $p = $options2[$i - 1];
                                        $options2[$i - 1] = $options2[$j - 1];
                                        $options2[$j - 1] = $p;



                                }
                        }

                        if ($i > 9) {
                                $out .= '<b style="font-style:italic;font-size: 14px;color: #006699;font-family: Arial, sans-serif;">' . $i . '.</b>&nbsp; ' . $options2[$i - 1] . ' - <font class="style24">' . $t[$i] . '&nbsp;совпавшихся мнений</font>';
                        } else {
                                $out .= '&nbsp;&nbsp;&nbsp;<b style="font-style:italic;font-size: 14px;color: #006699;font-family: Arial, sans-serif;">' . $i . '</b>.&nbsp; ' . $options2[$i - 1] . ' - <font class="style24">' . $t[$i] . '&nbsp;совпавшихся мнений</font><br>';
                        }
                }
                $out .= '<br><br><a href="/test.php"><b>« Пройти еще раз!</a><br>
<a href="/index.html"><b>« На главную!</a>';

        }

} else {
        $options = '';
        $options = file("db/q.txt");
        $sf = count($options);

        $out .= '<form name="vote" action="/test.php" method="post" style="padding-left:10px" class="style24">' .
                '<br><h2><font style="font-style: italic; font-size: 26px; color: #4b83a6"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇺🇦&nbsp;Выборы президента Украины - 2010&nbsp;🇺🇦</font></b></h2>';

        for ($j = 0; $j < $sf; $j++) {
                $m = explode("|", trim($options[$j]));
                $z = count($m);
                $out .= '<br><font style="font-style: italic; color: #8B4513"> Вопрос №' . $m[0] . ':</font>&nbsp;&nbsp;<b style="text-decoration: underline;">' . $m[1] . '</b><br><br>';
                for ($x = 0; $x < $z - 2; $x++) {
                        $out .= '<input name="q' . $m[0] . '" type="radio" value="' . ($x + 1) . '">' . $m[$x + 2] . '<br>';
                }
        }

        $out .= '<br><input name="action" type="hidden" value="ok"><input src="/img/button.gif" type="image" alt="Результат!" ><br><br></form>';

}
$out .= '</td>
    <td width="191" background="/img/right.jpg" />  </tr>
  <tr>
    <td colspan="3"><div align="center"></div></td>
  </tr>
</table>
</body></html>';
echo $out;