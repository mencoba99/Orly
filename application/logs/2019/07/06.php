<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2019-07-06 08:14:15 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'keterangan_id' in 'where clause' [ SELECT `inaktif`.`id` AS `id`, `inaktif`.`klasifikasi_id` AS `klasifikasi_id`, `inaktif`.`guna_id` AS `guna_id`, `inaktif`.`media_id` AS `media_id`, `inaktif`.`tingkat_id` AS `tingkat_id`, `inaktif`.`lampiran_id` AS `lampiran_id`, `inaktif`.`instansi_id` AS `instansi_id`, `inaktif`.`jumlah` AS `jumlah`, `inaktif`.`bulan` AS `bulan`, `inaktif`.`tahun` AS `tahun`, `inaktif`.`isi` AS `isi`, `inaktif`.`file` AS `file`, `inaktif`.`pelaksana` AS `pelaksana`, `inaktif`.`hasil` AS `hasil`, `inaktif`.`user_id` AS `user_id`, `inaktif`.`origin` AS `origin`, `inaktif`.`ra` AS `ra`, `inaktif`.`ri` AS `ri`, `inaktif`.`ta` AS `ta`, `inaktif`.`ti` AS `ti`, `inaktif`.`k` AS `k` FROM `inaktifs` AS `inaktif` WHERE `instansi_id` = '2' AND `keterangan_id` = '1' ORDER BY `klasifikasi_id` ASC, `tahun` ASC, `bulan` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/arsipsemarangkot/public_html/modules/database/classes/Kohana/Database/Query.php:251
2019-07-06 08:14:15 --- DEBUG: #0 /home/arsipsemarangkot/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `inaktif...', 'Model_Inaktif', Array)
#1 /home/arsipsemarangkot/public_html/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/arsipsemarangkot/public_html/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/arsipsemarangkot/public_html/application/classes/Controller/Dinas/Inaktif.php(208): Kohana_ORM->find_all()
#4 /home/arsipsemarangkot/public_html/system/classes/Kohana/Controller.php(84): Controller_Dinas_Inaktif->action_cetak()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/arsipsemarangkot/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dinas_Inaktif))
#7 /home/arsipsemarangkot/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/arsipsemarangkot/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/arsipsemarangkot/public_html/index.php(109): Kohana_Request->execute()
#10 {main} in /home/arsipsemarangkot/public_html/modules/database/classes/Kohana/Database/Query.php:251