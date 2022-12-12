<?php
include '../Connect/connect.php';
require('fpdf.php');
require('makefont/makefont.php');


$arrtext["unifForm"] = "Унифицированная форма № Т-2 \n Утверждена Постановлением Госкомстата России \n от 05.01.2004 № 1";
$arrtext["okydForm"] = "Форма по ОКУД\n по ОКПО";
$arrtext["kod"] = "Код";
$arrtext["numberkod"] = "0301002";
$arrtext["nameOrg"] = "(наименование организации)";
$arrtext["table1_date"] = "Дата состав-\nления";
$arrtext["table1_vid"] = "Вид работы \n (основная, по \n совместитель-\nству)";
$arrtext["table1_gender"] = "Пол\n (мужской,\nженский)";
$arrtext["table1_charact"] = "Характер \n работы";
$arrtext["table1_alfav"] = "Алфа-\nвит";
$arrtext["table1_straxSvid"] = "Номер страхового свиде-\nтельства государственного\n пенсионного страхования";
$arrtext["table1_numberNalPl"] = "Идентификационный\n номер налогоплатель-\nщика";
$arrtext["table1_tablNumb"] = "Табельный\nномер";
$arrtext["lich_kartaLogo"] = "ЛИЧНАЯ КАРТОЧКА\nработника";
$arrtext["all_sved"] = "I. ОБЩИЕ СВЕДЕНИЯ";
$arrtext["trud_dog"] = "Трудовой договор";
$arrtext["table2_number"] = "номер";
$arrtext["table2_date"] = "дата";
$arrtext["firstname"] = "1. Фамилия";
$arrtext["name"] = "Имя";
$arrtext["middlename"] = "Отчество";
$arrtext["table3_kod"] = "Код";
$arrtext["dateBirthday"] = "2. Дата рождения";
$arrtext["dateBirthday_desc"] = "(день, месяц, год)";
$arrtext["mest_rojd"] = "3. Место рождения";
$arrtext["okato"] = "по ОКАТО";
$arrtext["grajd"] = "4. Гражданство";
$arrtext["okin"] = "по ОКИН";
$arrtext["english"] = "5. Знание иностранного языка";
$arrtext["english_desc"] = "(наименование)                                         (степень знания)";
$arrtext["education"] = "6. Образование";
$arrtext["education_desc"] = "(среднее (полное) общее, начальное профессиональное, среднее профессиональное, высшее профессиональное)";

//Образование 

$arrtext["table3_nameObr"] = "Наименование образовательного учреждения";
$arrtext["table3_dateEnd"] = "Год\nокончания";
$arrtext["table3_docDesc"] = "Документ об образовании, о квалифи-\nкации или наличии специальных знаний";
$arrtext["table3_kval"] = "Квалификация по документу об образовании";
$arrtext["table3_name_doc"] = "наименование";
$arrtext["table3_name_docDesc"] = "Диплом";
$arrtext["table3_series"] = "серия";
$arrtext["table3_number"] = "номер";
$arrtext["table3_naprav"] = "Направление или специальность по документу";
$arrtext["table3_kodOKPDTR"] = "по ОКПДТР";


//Профессия

$arrtext["prof"] = "7. Профессия";
$arrtext["table3_kodOKSO"] = "Код по ОКСО";

$arrtext["number_str2"] = "2-я страница формы № Т-2";

//Стаж 

$arrtext["staj"] = "8. Стаж работы (по состоянию на  “______”___________         г.):";
$arrtext["staj_desc"] = "Общий                                                                        ___________дней ______________месяцев _____________лет\n
Непрерывный                                                            ___________дней ______________месяцев _____________лет\n
Дающий право на надбавку за выслугу лет           ___________дней ______________месяцев _____________лет";

//Брак

$arrtext["family"] = "9. Состояние в браке                 _______________________________________________  Код по ОКИН";
$arrtext["children"] = "10. Состав семьи:";  

$arrtext["table4_children"] = "Степень родства\n(ближайшие родственники)";
$arrtext["table4_fio"] = "Фамилия, имя, отчество";
$arrtext["table4_birthday"] = "Год рождения";

//паспорт

$arrtext["pass"] = "11. Паспорт:        № _________________ Дата выдачи   “_____”___________  _______г.";
$arrtext["pass_vidan"] = "Выдан ";
$arrtext["pass_desc"] = "(наименование органа, выдавшего паспорт)";

//адрес

$arrtext["adress"] = "12. Адрес места жительства:";
$arrtext["adress_pass"] = "По паспорту";
$arrtext["adress_fact"] = "Фактический";
$arrtext["phone"] = "Номер телефона ________________________";

//Воинский учет

$arrtext["military"] = "II. СВЕДЕНИЯ О ВОИНСКОМ УЧЕТЕ";
$arrtext["kat_zapasa"] = "1. Категория запаса  _________________________________";
$arrtext["voin_zvanie"] = "2. Воинское звание   _________________________________";
$arrtext["sostav"] = "3. Состав (профиль) _________________________________";
$arrtext["VUS"] = "4. Полное кодовое обозначение ВУС       ________________";
$arrtext["kat_godnosti"] = "5. Категория годности к военной службе ________________";
$arrtext["name_kom"] = "6. Наименование военного\n комиссариата по месту жительства";
$arrtext["sost_voin"] = "7. Состоит на воинском учете:             ________________\n
     а) общем (номер команды, партии)________________\n
     б) специальном                                 ________________";   
 $arrtext["eight"] = "8. _______________________________________________";     
 $arrtext["mark_military"] = "(отметка о снятии с воинского учета)";        
 
 //Работники

 $arrtext["worker_hr"] = "Работник кадровой службы   ________________________  ___________________  ________________________________";  
 $arrtext["worker_hrDesc"] = "(должность)                                     (личная подпись)                                        (расшифровка подписи)";
 $arrtext["worker"] = "Работник ____________________";  
 $arrtext["worker_Desc"] = "(личная подпись)";
 $arrtext["worker_date"] = "“_______”  ____________    ____ г.";

 //Страница 3
 
 $arrtext["number_str3"] = "3-я страница формы № Т-2";

 //Трудовая книга

 $arrtext["labory"] = "III. ПРИЕМ НА РАБОТУ \nИ ПЕРЕВОДЫ НА ДРУГУЮ РАБОТУ";
 $arrtext["table5_podpis"] = "Личная\nподпись\nвладельца\nтрудовой\nкнижки";
 $arrtext["table5_osnovanie"] = "На основании чего\nвнесена запись\n(документ, его дата\n и подпись)";
 $arrtext["table5_sved"] = "Сведения о приеме на работу, о переводах на другую работу\n и об увольнении(с указанием причин и со ссылкой\n на статью, пункт закона)";
 $arrtext["table5_NumberZap"] = "№\nзаписи";
 $arrtext["table5_date"] = "Дата";

 //Награды
 $arrtext["awards"] = "VII. НАГРАДЫ (ПООЩРЕНИЯ), ПОЧЕТНЫЕ ЗВАНИЯ";
 $arrtext["awards_name"] = "Наименование награды (поощрения)";
 $arrtext["awards_documents"] = "Документ";
 $arrtext["awards_documentsName"] = "Наименование";
 $arrtext["awards_documentsNumber"] = "Номер";
 $arrtext["awards_documentsDate"] = "Дата";

 //ОТпуск
 $arrtext["vacation"] = "VIII. ОТПУСК";
 $arrtext["vacation_type"] = "Вид отпуска (ежегодный, учебный,\nбез сохранения заработной платы\nи др.)";
 $arrtext["vacation_kolDay"] = "Количество\nкалендарных\nдней отпуска";
 $arrtext["vacation_date"] = "Дата";
 $arrtext["vacation_dateStart"] = "начала";
 $arrtext["vacation_dateEnd"] = "окончания";
 $arrtext["vacation_footing"] = "Основание";

 //Доп сведения
 $arrtext["number_str4"] = "4-я страница формы № Т-2";
 $arrtext["dop_sved"] = "X. ДОПОЛНИТЕЛЬНЫЕ СВЕДЕНИЯ";

 //Увольнение

 $arrtext["dismiss"] = "XI. Основание прекращения\nтрудового договора (увольнения)";
 $arrtext["dismiss_date"] = "Дата увольнения      “______” ___________     ____г.\n
Приказ (распоряжение) № ____________ от      “______” ___________     _____г.";




foreach($arrtext as &$text){
    $text = iconv('utf-8','windows-1251', $text);
}

$id=$_GET["id"];
$educationCon = mysqli_query($link, "select * from education join people_table on education.employees_id = people_table.id where education.employees_id ='$id' order by record_id desc limit 3");
$workerCon = mysqli_query($link, "select * from `people_table` where id='$id'");
$postCon = mysqli_query($link, "select title from post JOIN post_of_the_employee ON post_of_the_employee.post_Code=post.post_code  where post_of_the_employee.table_number='$id' and (post_of_the_employee.date_end IS NULL) limit 3");
$laborCon = mysqli_query($link, "select * from labor_book join people_table on labor_book.employees_code = people_table.id where labor_book.employees_code ='$id' order by record_id ASC limit 4");
$awardsCon = mysqli_query($link, "select * from awards join people_table on awards.employees_code = people_table.id where awards.employees_code ='$id' order by record_id ASC limit 4");
$vacationCon = mysqli_query($link, "select * from vacation_order join people_table on vacation_order.employees_report_card = people_table.id where vacation_order.employees_report_card ='$id' order by order_number_vacation ASC limit 4");
while($worker = mysqli_fetch_array( $workerCon))
{
    $datenow = date("d.m.Y");
    $worker["name"] = iconv('utf-8','windows-1251',  $worker["name"] );
    $worker["surname"] = iconv('utf-8','windows-1251',  $worker["surname"] );
    $worker["middlename"] = iconv('utf-8','windows-1251',  $worker["middlename"] );
    $worker["gender"] = iconv('utf-8','windows-1251',  $worker["gender"] );
    $worker["birthday"] = iconv('utf-8','windows-1251',  $worker["birthday"] );
    $worker["region"] = iconv('utf-8','windows-1251',  $worker["region"] );
    $worker["city"] = iconv('utf-8','windows-1251',  $worker["city"] );
    $worker["street"] = iconv('utf-8','windows-1251',  $worker["street"] );
    if($worker["military_title"] != null && $worker["shelf_life"] != null){
    $worker["military_title"] = iconv('utf-8','windows-1251',  $worker["military_title"] );
    $worker["shelf_life"] = iconv('utf-8','windows-1251',  $worker["shelf_life"] );
    }


    $dateStartYearExperience = date("Y-m-d");

   
    $dateNowExperience = strtotime($worker["date_start_work"]);
    $dateStartExperience = strtotime($dateStartYearExperience);

    $experience = $dateStartExperience -  $dateNowExperience;

        $d = floor(($experience%2678400)/86400);
        $M = floor(($experience%32140800)/2678400);
        $Y = floor($experience/32140800);

        $dNow = date("d");
        $mNow = date("m");
        $yNow = date("Y");
 


    $image = base64_encode($worker['image']);
    $imageBase = "data:image/jpeg;base64, <?=$image?>";


$pdf = new FPDF();
$pdf->AddFont('TimesNewRomanRegular', '', "TimesNewRomanRegular.php");


$pdf->AddPage();

$pdf->SetXY(135,10);
$pdf->SetFont("TimesNewRomanRegular",'',8);
$pdf->MultiCell(0,4,$arrtext["unifForm"],"0","L");


$pdf->SetXY(127,27);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(0,4,$arrtext["okydForm"],"0","C");

$pdf->SetXY(179,23);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4,$arrtext["kod"],"1","C");

$pdf->SetXY(179,27);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4,$arrtext["numberkod"],"1","C");

$pdf->SetXY(179,31);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4,"","1","C");

$nameCompany = "Insurance company";

$pdf->SetXY(70,31);
$pdf->SetFont("TimesNewRomanRegular",'',14);
$pdf->MultiCell(136,4,$nameCompany,"0","L");

$pdf->SetXY(20,35);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(136,4,"","T","L");

$pdf->SetXY(75,35);
$pdf->SetFont("TimesNewRomanRegular",'',7);
$pdf->MultiCell(136,4,$arrtext["nameOrg"],"0","L");

$pdf->SetXY(19,41);
$pdf->SetFont("TimesNewRomanRegular",'',9);
$pdf->MultiCell(19,7.9,$arrtext["table1_date"],"1","C");

$pdf->SetXY(19,57);
$pdf->SetFont("TimesNewRomanRegular",'',9);
$pdf->MultiCell(19,6,$datenow,"1","C");

$pdf->SetXY(157,41);
$pdf->SetFont("TimesNewRomanRegular",'',9);
$pdf->MultiCell(25,4,$arrtext["table1_vid"],"1","C");

$pdf->SetXY(157,57);
$pdf->SetFont("TimesNewRomanRegular",'',9);
$pdf->MultiCell(25,6,"","1","C");

$pdf->SetXY(182,41);
$pdf->SetFont("TimesNewRomanRegular",'',9);
$pdf->MultiCell(17,5.3,$arrtext["table1_gender"],"1","C");

$pdf->SetXY(182,57);
$pdf->SetFont("TimesNewRomanRegular",'',9);
$pdf->MultiCell(17,6,$worker["gender"],"1","C");

$pdf->SetXY(139,41);
$pdf->SetFont("TimesNewRomanRegular",'',9);
$pdf->MultiCell(18,8,$arrtext["table1_charact"],"1","C");

$pdf->SetXY(139,57);
$pdf->SetFont("TimesNewRomanRegular",'',9);
$pdf->MultiCell(18,6,"","1","C");

$pdf->SetXY(128,41);
$pdf->SetFont("TimesNewRomanRegular",'',9);
$pdf->MultiCell(11,8,$arrtext["table1_alfav"],"1","C");

$firstSimbol = $worker["surname"];

$pdf->SetXY(128,57);
$pdf->SetFont("TimesNewRomanRegular",'',9);
$pdf->MultiCell(11,6,$firstSimbol[0],"1","C");

$pdf->SetXY(88,41);
$pdf->SetFont("TimesNewRomanRegular",'',9);
$pdf->MultiCell(40,5.3,$arrtext["table1_straxSvid"],"1","C");

$pdf->SetXY(88,57);
$pdf->SetFont("TimesNewRomanRegular",'',9);
$pdf->MultiCell(40,6,"","1","C");

$pdf->SetXY(55,41);
$pdf->SetFont("TimesNewRomanRegular",'',9);
$pdf->MultiCell(33,5.3,$arrtext["table1_numberNalPl"],"1","C");

$pdf->SetXY(55,57);
$pdf->SetFont("TimesNewRomanRegular",'',9);
$pdf->MultiCell(33,6,"","1","C");

$pdf->SetXY(38,41);
$pdf->SetFont("TimesNewRomanRegular",'',9);
$pdf->MultiCell(17,7.9,$arrtext["table1_tablNumb"],"1","C");

$pdf->SetXY(38,57);
$pdf->SetFont("TimesNewRomanRegular",'',9);
$pdf->MultiCell(17,6,$id,"1","C");

$pdf->SetXY(80,66);
$pdf->SetFont("TimesNewRomanRegular",'',12);
$pdf->MultiCell(50,4,$arrtext["lich_kartaLogo"],"0","C");

$pdf->SetXY(80,77);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(50,4,$arrtext["all_sved"],"0","C");

$pdf->SetXY(115,83);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(50,4,$arrtext["trud_dog"],"0","C");

$pdf->SetXY(160,83);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4.5,$arrtext["table2_number"],"1","C");

$pdf->SetXY(180,83);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4.5,"","1","C");

$pdf->SetXY(160,87.5);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4.5,$arrtext["table2_date"],"1","C");

$pdf->SetXY(180,87.5);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4.5, "","1","C");

$pdf->SetXY(20,94);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4.5, $arrtext["firstname"],"0","L");

$pdf->SetXY(40,94);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(50,4.5,"","B","L");

$pdf->SetXY(50,94);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(50,4.5,$worker["surname"],"0","L");


$pdf->SetXY(93,94);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4.5, $arrtext["name"],"0","L");

$pdf->SetXY(101,94);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(32,4.5,"","B","L");

$pdf->SetXY(105,94);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(32,4.5,$worker["name"],"0","L");

$pdf->SetXY(134,94);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4.5, $arrtext["middlename"],"0","L");

$pdf->SetXY(150,94);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(50,4.5,"","B","L");

$pdf->SetXY(160,94);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(50,4.5,$worker["middlename"],"0","L");

$pdf->SetXY(179,101);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4,$arrtext["kod"],"1","C");

$okidGraj = "Фасет 02";
$okidEnglish = "Фасет 05";
$okidEducation = "Фасет 30";

$okidGraj = iconv('utf-8','windows-1251',  $okidGraj );
$okidEnglish = iconv('utf-8','windows-1251',  $okidEnglish );
$okidEducation = iconv('utf-8','windows-1251',  $okidEducation );

$i = 0;
while($i != 42){
    $pdf->SetXY(179,105+$i);
    $pdf->SetFont("TimesNewRomanRegular",'',10);
    if ($i == 7)
    $pdf->MultiCell(20,7,"4528656000","1","C");
    else if ($i == 14)
    $pdf->MultiCell(20,7,$okidGraj,"1","C");
    else if ($i == 21 ||  $i == 28)
    $pdf->MultiCell(20,7,$okidEnglish,"1","C");
    else if ($i == 35)
    $pdf->MultiCell(20,7,$okidEducation,"1","C");
    else
    $pdf->MultiCell(20,7,"","1","C");
    $i = $i+7;
}

$pdf->SetXY(20,108);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(40,4.5, $arrtext["dateBirthday"],"0","L");

$pdf->SetXY(48,107.5);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(140,4.5,"","B","L");

$pdf->SetXY(100,107.5);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(140,4.5,$worker["birthday"],"0","L");

$pdf->SetXY(100,111);
$pdf->SetFont("TimesNewRomanRegular",'',7);
$pdf->MultiCell(140,4.5,$arrtext["dateBirthday_desc"],"0","L");

$pdf->SetXY(20,115);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(40,4.5, $arrtext["mest_rojd"],"0","L");

$pdf->SetXY(50,114.5);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(110,4.5,"","B","L");

$pdf->SetXY(160,115);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(40,4.5, $arrtext["okato"],"0","L");

$region = "Российская Федерация";

$region = iconv('utf-8','windows-1251', $region);

$pdf->SetXY(65,115);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(40,4.5,$region,"0","L");

$pdf->SetXY(20,122);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(40,4.5, $arrtext["grajd"],"0","L");

$grajd = "Российское";
$grajd = iconv('utf-8','windows-1251',  $grajd);

$pdf->SetXY(70,122);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(40,4.5, $grajd,"0","L");

$pdf->SetXY(46,121.5);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(114,4.5,"","B","L");

$k = 0;
while($k != 28){
    $pdf->SetXY(158,120.5+$k);
    $pdf->SetFont("TimesNewRomanRegular",'',10);
    $pdf->MultiCell(20,7,$arrtext["okin"],"0","C");
    $k = $k+7;
}

$pdf->SetXY(20,129);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(50,4.5, $arrtext["english"],"0","L");

$pdf->SetXY(67,128.5);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(93,4.5,"","B","L");

$pdf->SetXY(80,132);
$pdf->SetFont("TimesNewRomanRegular",'',7);
$pdf->MultiCell(180,4.5,$arrtext["english_desc"],"0","L");

$pdf->SetXY(67,135.5);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(93,4.5,"","B","L");

$pdf->SetXY(20,143);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(50,4.5, $arrtext["education"],"0","L");

$pdf->SetXY(45,142.5);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(115,4.5,"","B","L");

$pdf->SetXY(43,146.3);
$pdf->SetFont("TimesNewRomanRegular",'',7);
$pdf->MultiCell(180,4.5,$arrtext["education_desc"],"0","L");


// table Education
$font = 0;
while($education = mysqli_fetch_array($educationCon))
{
    $education["specialization"] = iconv('utf-8','windows-1251',  $education["specialization"] );

$pdf->SetXY(156,155+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(23,4,$arrtext["table3_dateEnd"],"1","C");

$pdf->SetXY(92,155+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(64,4,$arrtext["table3_docDesc"],"1","C");

$pdf->SetXY(20,155+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(72,8,$arrtext["table3_nameObr"],"1","C");

$pdf->SetXY(20,163+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(72,4.5,"","1","C");

$pdf->SetXY(20,167.5+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(72,4.5,"","1","C");

$pdf->SetXY(20,172+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(72,4.5,$arrtext["table3_kval"],"1","C");

$pdf->SetXY(20,176.5+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(72,4.5,$education["specialization"],"1","C");

$pdf->SetXY(20,181+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(72,4.5,"","1","C");

$pdf->SetXY(92,163+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(30,4.5,$arrtext["table3_name_doc"],"1","C");

$pdf->SetXY(92,167.5+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(30,4.5,$arrtext["table3_name_docDesc"],"1","C");

$pdf->SetXY(122,163+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(15,4.5,$arrtext["table3_series"],"1","C");

$pdf->SetXY(122,167.5+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(15,4.5,$education["series_diplom"],"1","C");

$pdf->SetXY(137,163+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(19,4.5,$arrtext["table3_number"],"1","C");

$pdf->SetXY(137,167.5+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(19,4.5,$education["diploma_number"],"1","C");

$pdf->SetXY(156,163+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(23,9,$education["year_references"],"1","C");

$pdf->SetXY(92,172+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(87,4.5,$arrtext["table3_naprav"],"1","C");

$pdf->SetXY(92,176.4+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(87,9,$arrtext["table3_kodOKSO"],"1","R");

$pdf->SetXY(179,176.4+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,9,"","1","R");

$font = $font +35;
}

//Профессия

$pdf->SetXY(20,260);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(50,4.5, $arrtext["prof"],"0","L");

$pdf->SetXY(42,260);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(115,4.5, "","B","L");

$pdf->SetXY(157,260);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(115,4.5, $arrtext["table3_kodOKPDTR"],"0","L");

$pdf->SetXY(42,266);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(115,4.5, "","B","L");

$pdf->SetXY(157,266);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(115,4.5, $arrtext["table3_kodOKPDTR"],"0","L");

$pdf->SetXY(42,272);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(115,4.5, "","B","L");

$pdf->SetXY(157,272);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(115,4.5, $arrtext["table3_kodOKPDTR"],"0","L");


$font = 0;
while($post = mysqli_fetch_array($postCon)){

    $post["title"] = iconv('utf-8','windows-1251', $post["title"]);

    $pdf->SetXY(70,260+$font);
    $pdf->SetFont("TimesNewRomanRegular",'',10);
    $pdf->MultiCell(115,4.5, $post["title"],"0","L");
    $font = $font + 6;
}

$pdf->AddPage();

$pdf->SetXY(135,10);
$pdf->SetFont("TimesNewRomanRegular",'',8);
$pdf->MultiCell(0,4,$arrtext["number_str2"],"0","R");

$pdf->SetXY(20,17);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(115,4.5, $arrtext["staj"],"0","L");

$pdf->SetXY(77,17);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(115,4.5, $dNow,"0","L");

$pdf->SetXY(93,17);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(115,4.5, $mNow,"0","L");

$pdf->SetXY(106,17);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(115,4.5, $yNow,"0","L");

$pdf->SetXY(30,25);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(300,2, $arrtext["staj_desc"],"0","L");

$pdf->SetXY(110,25);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(300,2, $d,"0","L");

$pdf->SetXY(140,25);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(300,2, $M,"0","L");

$pdf->SetXY(180,25);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(300,2, $Y,"0","L");

$pdf->SetXY(110,29);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(300,2, $d,"0","L");

$pdf->SetXY(140,29);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(300,2, $M,"0","L");

$pdf->SetXY(180,29);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(300,2, $Y,"0","L");

$pdf->SetXY(20,45);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(300,4.5, $arrtext["family"],"0","L");

$okidFamily = "Фасет 10";

$okidFamily = iconv('utf-8','windows-1251',  $okidFamily );

$pdf->SetXY(175,45);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(23,4, $okidFamily,"1","C");

if($worker['family_position'] == 1) 
$family_pos = "Женат(Замужем)"; 
else 
$family_pos = "Не женат(Не замужем)";

$family_pos = iconv('utf-8','windows-1251',  $family_pos);

$pdf->SetXY(90,45);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(50,4,$family_pos,"0","L");

$pdf->SetXY(20,52);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(300,4.5, $arrtext["children"],"0","L");

$pdf->SetXY(20,59);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(48,4.5, $arrtext["table4_children"],"1","C");

$pdf->SetXY(20,68);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(48,4.5,"1","1","C");

$pdf->SetXY(20,72.5);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(48,4.5,"","1","C");

$pdf->SetXY(20,77);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(48,4.5,"","1","C");

$pdf->SetXY(68,59);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(105,9, $arrtext["table4_fio"],"1","C");

$pdf->SetXY(68,68);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(105,4.5, "2","1","C");

$pdf->SetXY(68,72.5);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(105,4.5, "","1","C");

$pdf->SetXY(68,77);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(105,4.5, "","1","C");

$pdf->SetXY(173,59);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(25,9, $arrtext["table4_birthday"],"1","C");

$pdf->SetXY(173,68);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(25,4.5, "3","1","C");

$pdf->SetXY(173,72.5);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(25,4.5, "","1","C");

$pdf->SetXY(173,77);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(25,4.5, "","1","C");

$font = 0;
$children = 0;
$type_child = "Ребенок";
$type_child = iconv('utf-8','windows-1251',  $type_child);
while($children != $worker["children"])
{
$pdf->SetXY(20,81.5+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(48,4.5,$type_child,"1","C");

$pdf->SetXY(68,81.5+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(105,4.5, "","1","C");

$pdf->SetXY(173,81.5+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(25,4.5, "","1","C");
$font = $font+4.5;
$children = $children +1;
}

//паспорт

$pdf->SetXY(20,107);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(300,4.5, $arrtext["pass"],"0","L");

$pdf->SetXY(55,107);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(300,4.5, $worker["passport_series"],"0","L");

$pdf->SetXY(65,107);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(300,4.5, $worker["passport_number"],"0","L");

$pdf->SetXY(25,112);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(30,4.5, $arrtext["pass_vidan"],"0","L");

$pdf->SetXY(37,111.5);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(160,4.5, "","B","L");

$pdf->SetXY(90,115);
$pdf->SetFont("TimesNewRomanRegular",'',7);
$pdf->MultiCell(160,4.5, $arrtext["pass_desc"],"0","L");

$pdf->SetXY(37,120);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(160,4.5, "","B","L");

$pdf->SetXY(37,125);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(160,4.5, "","B","L");

$pdf->SetXY(37,130);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(160,4.5, "","B","L");

// адрес

$pdf->SetXY(20,135);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(300,4.5, $arrtext["adress"],"0","L");

$pdf->SetXY(25,147);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(300,4.5, $arrtext["adress_pass"],"0","L");

$pdf->SetXY(45,147);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(153,4.5, "","B","L");

$pdf->SetXY(45,151.5);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(153,4.5, "","B","L");

$pdf->SetXY(55,147);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(40,4.5,$worker["region"],"0","L");

$pdf->SetXY(95,147);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(40,4.5,$worker["city"],"0","L");

$pdf->SetXY(110,147);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(40,4.5,$worker["street"],"0","L");

$pdf->SetXY(135,147);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(40,4.5,$worker["house"],"0","L");

$pdf->SetXY(140,147);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(40,4.5,$worker["apartment_number"],"0","L");

$pdf->SetXY(25,160);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(300,4.5, $arrtext["adress_fact"],"0","L");

$pdf->SetXY(46,160);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(152,4.5, "","B","L");

$pdf->SetXY(46,164.5);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(152,4.5, "","B","L");

$pdf->SetXY(20,174);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(300,4.5, $arrtext["phone"],"0","L");



//Воинский учет

$pdf->SetXY(60,188);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(100,4,$arrtext["military"],"0","C");

$pdf->SetXY(20,200);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(100,4,$arrtext["kat_zapasa"],"0","L");

$pdf->SetXY(20,205);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(100,4,$arrtext["voin_zvanie"],"0","L");

$pdf->SetXY(60,205);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(100,4,$worker["military_title"],"0","L");

$pdf->SetXY(20,210);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(100,4,$arrtext["sostav"],"0","L");

$pdf->SetXY(20,215);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(100,4,$arrtext["VUS"],"0","L");

$pdf->SetXY(20,220);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(100,4,$arrtext["kat_godnosti"],"0","L");

$pdf->SetXY(90,220);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(100,4,$worker["shelf_life"],"0","L");



$pdf->SetXY(113,196);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(100,4,$arrtext["name_kom"],"0","L");

$pdf->SetXY(170,200);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(28,4,"","B","L");

$pdf->SetXY(115,205);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(84,4,"","B","L");

$pdf->SetXY(113,210.5);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(200,2,$arrtext["sost_voin"],"0","L");

$pdf->SetXY(113,223);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(200,2,$arrtext["eight"],"0","L");

$pdf->SetXY(133,226);
$pdf->SetFont("TimesNewRomanRegular",'',7);
$pdf->MultiCell(200,2, $arrtext["mark_military"],"0","L");

$pdf->SetXY(20,240);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(200,4,$arrtext["worker_hr"],"0","L");

$pdf->SetXY(80,243.5);
$pdf->SetFont("TimesNewRomanRegular",'',7);
$pdf->MultiCell(200,4,$arrtext["worker_hrDesc"],"0","L");

$pdf->SetXY(20,253);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(200,4,$arrtext["worker"],"0","L");

$pdf->SetXY(43,256.5);
$pdf->SetFont("TimesNewRomanRegular",'',7);
$pdf->MultiCell(200,4,$arrtext["worker_Desc"],"0","L");

$pdf->SetXY(20,263);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(200,4,$arrtext["worker_date"],"0","L");

$pdf->SetXY(26,263);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(200,4,$dNow,"0","L");

$pdf->SetXY(46,263);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(200,4,$mNow,"0","L");

$pdf->SetXY(59,263);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(200,4,$yNow,"0","L");

$pdf->AddPage();

$pdf->SetXY(135,10);
$pdf->SetFont("TimesNewRomanRegular",'',8);
$pdf->MultiCell(0,4,$arrtext["number_str3"],"0","R");

//Трудовая книга

$pdf->SetXY(60,20);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(100,4,$arrtext["labory"],"0","C");

$pdf->SetXY(178,30);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4,$arrtext["table5_podpis"],"1","C");

$pdf->SetXY(178,50);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4,"5","1","C");

$pdf->SetXY(128,30);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(50,5, $arrtext["table5_osnovanie"],"1","C");

$pdf->SetXY(128,50);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(50,4,"4","1","C");

$pdf->SetXY(48,30);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(80,5, $arrtext["table5_sved"],"1","C");

$pdf->SetXY(48,50);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(80,4, "3","1","C");

$pdf->SetXY(20,30);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(10,6.65, $arrtext["table5_NumberZap"],"1","C");

$pdf->SetXY(20,50);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(10,4, "1","1","C");

$pdf->SetXY(30,30);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(18,20, $arrtext["table5_date"],"1","C");

$pdf->SetXY(30,50);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(18,4, "2","1","C");

$pdf->SetXY(20,54);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(10,4, "","1","C");

$pdf->SetXY(30,54);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(18,4, "","1","C");

$pdf->SetXY(48,54);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(80,4, "","1","C");

$pdf->SetXY(128,54);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(50,4,"","1","C");

$pdf->SetXY(178,54);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4,"","1","C");

$pdf->SetXY(20,58);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(10,4, "","1","C");

$pdf->SetXY(30,58);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(18,4, "","1","C");

$pdf->SetXY(48,58);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(80,4, "","1","C");

$pdf->SetXY(128,58);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(50,4,"","1","C");

$pdf->SetXY(178,58);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4,"","1","C");

$pdf->SetXY(20,62);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(10,4, "","1","C");

$pdf->SetXY(30,62);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(18,4, "","1","C");

$pdf->SetXY(48,62);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(80,4, "","1","C");

$pdf->SetXY(128,62);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(50,4,"","1","C");

$pdf->SetXY(178,62);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4,"","1","C");

$k = 1;
$font = 0;
while($labor = mysqli_fetch_array( $laborCon)){

    $labor["information_work"] = iconv('utf-8','windows-1251',  $labor["information_work"]);
    $labor["title_document"] = iconv('utf-8','windows-1251',  $labor["title_document"]);

    $num = "№";
    $num2 = "От";
  
    $num = iconv('utf-8','windows-1251',  $num);
    $num2 = iconv('utf-8','windows-1251',  $num2);

    $pdf->SetXY(20,66+$font);
    $pdf->SetFont("TimesNewRomanRegular",'',10);
    $pdf->MultiCell(10,4, $k,"1","C");

    $pdf->SetXY(30,66+$font);
    $pdf->SetFont("TimesNewRomanRegular",'',9);
    $pdf->MultiCell(18,4,$labor["date_information"],"1","C");

    $pdf->SetXY(48,66+$font);
    $pdf->SetFont("TimesNewRomanRegular",'',10);
    $pdf->MultiCell(80,4, $labor["information_work"],"1","C");

    $pdf->SetXY(128,66+$font);
    $pdf->SetFont("TimesNewRomanRegular",'',10);
    $pdf->MultiCell(50,4,"".$labor["title_document"]." $num  ".$labor["number_document"]." $num2 ".$labor["date_document"]."","1","L");

    $pdf->SetXY(178,66+$font);
    $pdf->SetFont("TimesNewRomanRegular",'',10);
    $pdf->MultiCell(20,4,"","1","C");

    $pdf->SetXY(20,70+$font);
    $pdf->SetFont("TimesNewRomanRegular",'',10);
    $pdf->MultiCell(10,4, "","1","C");

    $pdf->SetXY(30,70+$font);
    $pdf->SetFont("TimesNewRomanRegular",'',9);
    $pdf->MultiCell(18,4,"","1","C");

    $pdf->SetXY(48,70+$font);
    $pdf->SetFont("TimesNewRomanRegular",'',10);
    $pdf->MultiCell(80,4, "","1","C");

    $pdf->SetXY(128,70+$font);
    $pdf->SetFont("TimesNewRomanRegular",'',10);
    $pdf->MultiCell(50,4,"","1","C");

    $pdf->SetXY(178,70+$font);
    $pdf->SetFont("TimesNewRomanRegular",'',10);
    $pdf->MultiCell(20,4,"","1","C");

    $pdf->SetXY(20,74+$font);
    $pdf->SetFont("TimesNewRomanRegular",'',10);
    $pdf->MultiCell(10,4, "","1","C");

    $pdf->SetXY(30,74+$font);
    $pdf->SetFont("TimesNewRomanRegular",'',9);
    $pdf->MultiCell(18,4,"","1","C");

    $pdf->SetXY(48,74+$font);
    $pdf->SetFont("TimesNewRomanRegular",'',10);
    $pdf->MultiCell(80,4, "","1","C");

    $pdf->SetXY(128,74+$font);
    $pdf->SetFont("TimesNewRomanRegular",'',10);
    $pdf->MultiCell(50,4,"","1","C");

    $pdf->SetXY(178,74+$font);
    $pdf->SetFont("TimesNewRomanRegular",'',10);
    $pdf->MultiCell(20,4,"","1","C");

    $font = $font +12;
    $k +=1;
}

//Награды

$pdf->SetXY(60,140);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(100,4,$arrtext["awards"],"0","C");

$pdf->SetXY(20,150);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(85,8,  $arrtext["awards_name"],"1","C");

$pdf->SetXY(20,158);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(85,4, "1","1","C");

$pdf->SetXY(105,150);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(93,4,  $arrtext["awards_documents"],"1","C");

$pdf->SetXY(105,154);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(31,4,  $arrtext["awards_documentsName"],"1","C");

$pdf->SetXY(105,158);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(31,4,  "2","1","C");

$pdf->SetXY(136,154);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(31,4,  $arrtext["awards_documentsNumber"],"1","C");

$pdf->SetXY(136,158);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(31,4,  "3","1","C");


$pdf->SetXY(167,154);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(31,4,  $arrtext["awards_documentsDate"],"1","C");

$pdf->SetXY(167,158);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(31,4,  "4","1","C");

$pdf->SetXY(20,162);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(85,4, "","1","C");

$pdf->SetXY(105,162);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(31,4,  "","1","C");

$pdf->SetXY(136,162);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(31,4,  "","1","C");

$pdf->SetXY(167,162);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(31,4,  "","1","C");

$pdf->SetXY(20,166);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(85,4, "","1","C");

$pdf->SetXY(105,166);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(31,4,  "","1","C");

$pdf->SetXY(136,166);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(31,4,  "","1","C");

$pdf->SetXY(167,166);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(31,4,  "","1","C");


$font = 0;
while($awards = mysqli_fetch_array( $awardsCon)){

   $awards["award"] =  iconv('utf-8','windows-1251',  $awards["award"]);
   $awards["document_name"] =  iconv('utf-8','windows-1251',  $awards["document_name"]);

    $pdf->SetXY(20,170+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(85,4, $awards["award"],"1","L");

$pdf->SetXY(105,170+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(31,4, $awards["document_name"],"1","L");

$pdf->SetXY(136,170+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(31,4,  $awards["document_number"],"1","C");

$pdf->SetXY(167,170+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(31,4,  $awards["document_date"],"1","C");

$pdf->SetXY(20,174+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(85,4, "","1","C");

$pdf->SetXY(105,174+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(31,4,  "","1","C");

$pdf->SetXY(136,174+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(31,4,  "","1","C");

$pdf->SetXY(167,174+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(31,4,  "","1","C");

$font = $font + 8;
}

//Отпуск

$pdf->SetXY(60,210);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(100,4,$arrtext["vacation"],"0","C");

$pdf->SetXY(20,220);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(60,4,$arrtext["vacation_type"],"1","C");

$pdf->SetXY(20,232);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(60,4,"1","1","C");

$pdf->SetXY(80,220);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(30,4,$arrtext["vacation_kolDay"],"1","C");

$pdf->SetXY(80,232);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(30,4,"2","1","C");

$pdf->SetXY(110,220);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(40,4,$arrtext["vacation_date"],"1","C");

$pdf->SetXY(110,224);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,8,$arrtext["vacation_dateStart"],"1","C");

$pdf->SetXY(110,232);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4,"3","1","C");

$pdf->SetXY(130,224);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,8,$arrtext["vacation_dateEnd"],"1","C");

$pdf->SetXY(130,232);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4,"4","1","C");

$pdf->SetXY(150,220);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(48,12,$arrtext["vacation_footing"],"1","C");

$pdf->SetXY(150,232);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(48,4,"5","1","C");



$pdf->SetXY(20,236);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(60,4,"","1","C");

$pdf->SetXY(80,236);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(30,4,"","1","C");

$pdf->SetXY(110,236);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4,"","1","C");

$pdf->SetXY(130,236);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4,"","1","C");

$pdf->SetXY(150,236);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(48,4,"","1","C");



$pdf->SetXY(20,240);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(60,4,"","1","C");

$pdf->SetXY(80,240);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(30,4,"","1","C");

$pdf->SetXY(110,240);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4,"","1","C");

$pdf->SetXY(130,240);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4,"","1","C");

$pdf->SetXY(150,240);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(48,4,"","1","C");


$font = 0;
while($vacation = mysqli_fetch_array($vacationCon)){

    $dateStartVacation = strtotime($vacation["vacation_start_date"]);
    $dateEndVacation = strtotime($vacation["vacation_end_date"]);

    $kDay = $dateEndVacation -  $dateStartVacation;

        $dVacation = floor(($kDay%2678400)/86400);
        

$vacation["type_of_vacation"] = iconv('utf-8','windows-1251',  $vacation["type_of_vacation"]);
$vacation["footing"] = iconv('utf-8','windows-1251',  $vacation["footing"]);



$pdf->SetXY(20,244+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(60,4,$vacation["type_of_vacation"],"1","L");

$pdf->SetXY(80,244+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(30,4,$dVacation,"1","C");

$pdf->SetXY(110,244+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4,$vacation["vacation_start_date"],"1","C");

$pdf->SetXY(130,244+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4,$vacation["vacation_end_date"],"1","C");

$pdf->SetXY(150,244+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(48,4,$vacation["footing"],"1","L");

$pdf->SetXY(20,248+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(60,4,"","1","L");

$pdf->SetXY(80,248+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(30,4,"","1","C");

$pdf->SetXY(110,248+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4,"","1","C");

$pdf->SetXY(130,248+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(20,4,"","1","C");

$pdf->SetXY(150,248+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(48,4,"","1","L");

$font = $font +8;

}

$pdf->AddPage();

$pdf->SetXY(135,10);
$pdf->SetFont("TimesNewRomanRegular",'',8);
$pdf->MultiCell(0,4,$arrtext["number_str4"],"0","R");

//Доп сведения

$pdf->SetXY(60,20);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(100,4, $arrtext["dop_sved"],"0","C");

$font = 0;
$k = 0;
while ($k != 4){

$pdf->SetXY(20,28+$font);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(178,4, "","B","C");

$font = $font +5;
$k++;
}

//Увольнение

$pdf->SetXY(20,52);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(100,4,  $arrtext["dismiss"],"0","L");

$pdf->SetXY(72,56);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(126,4,  "","B","L");

$pdf->SetXY(20,66);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(126,2.5,  $arrtext["dismiss_date"],"0","L");

if($worker["date_of_dismiss"] != null){
    
    $date=strtotime($worker["date_of_dismiss"]);
    $month=date("m",$date);
    $year=date("Y",$date);
    $day = date("d",$date);
    

    $pdf->SetXY(56,66);
    $pdf->SetFont("TimesNewRomanRegular",'',10);
    $pdf->MultiCell(126,2.5,  $day,"0","L");

    $pdf->SetXY(70,66);
    $pdf->SetFont("TimesNewRomanRegular",'',10);
    $pdf->MultiCell(126,2.5,  $month,"0","L");

    $pdf->SetXY(85,66);
    $pdf->SetFont("TimesNewRomanRegular",'',10);
    $pdf->MultiCell(126,2.5,  $year,"0","L");
}

$pdf->SetXY(20,82);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(200,4,$arrtext["worker_hr"],"0","L");

$pdf->SetXY(80,85.5);
$pdf->SetFont("TimesNewRomanRegular",'',7);
$pdf->MultiCell(200,4,$arrtext["worker_hrDesc"],"0","L");

$pdf->SetXY(20,89);
$pdf->SetFont("TimesNewRomanRegular",'',10);
$pdf->MultiCell(200,4,$arrtext["worker"],"0","L");

$pdf->SetXY(43,92.5);
$pdf->SetFont("TimesNewRomanRegular",'',7);
$pdf->MultiCell(200,4,$arrtext["worker_Desc"],"0","L");

$pdf->Output();
}

mysqli_close($link);

?>