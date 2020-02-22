<?php
//include 'includes/conexion.php';
$sql ="SELECT (select nom_cct from diana.escuelas where cct ='30DTV0117P') nombre,
(select count(*) from diana.primero where cct ='30DTV0117P' and sex ='HOMBRE' ) hombres_p,
(select count(*) from diana.primero where cct ='30DTV0117P' and sex ='MUJER' ) mujeres_p,
(select count(*) from diana.primero where cct ='30DTV0117P') total_p,

(select count(*) from diana.segundo where cct ='30DTV0117P' and sex ='HOMBRE' ) hombres_s,
(select count(*) from diana.segundo where cct ='30DTV0117P' and sex ='MUJER' ) mujeres_s,
(select count(*) from diana.segundo where cct ='30DTV0117P') total_s,

(select count(*) from diana.tercero where cct ='30DTV0117P' and sex ='HOMBRE' ) hombres_t,
(select count(*) from diana.tercero where cct ='30DTV0117P' and sex ='MUJER' ) mujeres_t,
(select count(*) from diana.tercero where cct ='30DTV0117P') total_t,

(select count(*) from diana.primero where cct ='30DTV0117P' and sex ='HOMBRE' ) +
(select count(*) from diana.tercero where cct ='30DTV0117P' and sex ='HOMBRE' ) +
(select count(*) from diana.segundo where cct ='30DTV0117P' and sex ='HOMBRE' ) total_hombres,

(select count(*) from diana.primero where cct ='30DTV0117P' and sex ='MUJER' ) +
(select count(*) from diana.tercero where cct ='30DTV0117P' and sex ='MUJER' ) +
(select count(*) from diana.segundo where cct ='30DTV0117P' and sex ='MUJER' ) total_mujeres,

(select count(*) from diana.primero where cct ='30DTV0117P') +
(select count(*) from diana.segundo where cct ='30DTV0117P') +
(select count(*) from diana.tercero where cct ='30DTV0117P') TOTAL_GRAL union


 SELECT (select nom_cct from diana.escuelas where cct ='30DTV0142O') nombre,
 (select count(*) from diana.primero where cct ='30DTV0142O' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV0142O' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV0142O') total_p,

 (select count(*) from diana.segundo where cct ='30DTV0142O' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV0142O' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV0142O') total_s,

 (select count(*) from diana.tercero where cct ='30DTV0142O' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV0142O' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV0142O') total_t,

 (select count(*) from diana.primero where cct ='30DTV0142O' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV0142O' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV0142O' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV0142O' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV0142O' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV0142O' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV0142O') +
 (select count(*) from diana.segundo where cct ='30DTV0142O') +
 (select count(*) from diana.tercero where cct ='30DTV0142O') TOTAL_GRAL union


 SELECT (select nom_cct from diana.escuelas where cct ='30DTV0281P') nombre,
 (select count(*) from diana.primero where cct ='30DTV0281P' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV0281P' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV0281P') total_p,

 (select count(*) from diana.segundo where cct ='30DTV0281P' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV0281P' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV0281P') total_s,

 (select count(*) from diana.tercero where cct ='30DTV0281P' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV0281P' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV0281P') total_t,

 (select count(*) from diana.primero where cct ='30DTV0281P' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV0281P' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV0281P' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV0281P' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV0281P' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV0281P' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV0281P') +
 (select count(*) from diana.segundo where cct ='30DTV0281P') +
 (select count(*) from diana.tercero where cct ='30DTV0281P') TOTAL_GRAL union


 SELECT (select nom_cct from diana.escuelas where cct ='30DTV0612P') nombre,
 (select count(*) from diana.primero where cct ='30DTV0612P' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV0612P' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV0612P') total_p,

 (select count(*) from diana.segundo where cct ='30DTV0612P' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV0612P' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV0612P') total_s,

 (select count(*) from diana.tercero where cct ='30DTV0612P' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV0612P' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV0612P') total_t,

 (select count(*) from diana.primero where cct ='30DTV0612P' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV0612P' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV0612P' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV0612P' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV0612P' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV0612P' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV0612P') +
 (select count(*) from diana.segundo where cct ='30DTV0612P') +
 (select count(*) from diana.tercero where cct ='30DTV0612P') TOTAL_GRAL union


 SELECT (select nom_cct from diana.escuelas where cct ='30DTV0659J') nombre,
 (select count(*) from diana.primero where cct ='30DTV0659J' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV0659J' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV0659J') total_p,

 (select count(*) from diana.segundo where cct ='30DTV0659J' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV0659J' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV0659J') total_s,

 (select count(*) from diana.tercero where cct ='30DTV0659J' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV0659J' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV0659J') total_t,

 (select count(*) from diana.primero where cct ='30DTV0659J' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV0612P' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV0659J' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV0659J' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV0659J' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV0659J' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV0659J') +
 (select count(*) from diana.segundo where cct ='30DTV0659J') +
 (select count(*) from diana.tercero where cct ='30DTV0659J') TOTAL_GRAL union


 SELECT (select nom_cct from diana.escuelas where cct ='30DTV0660Z') nombre,
 (select count(*) from diana.primero where cct ='30DTV0660Z' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV0660Z' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV0660Z') total_p,

 (select count(*) from diana.segundo where cct ='30DTV0660Z' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV0660Z' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV0660Z') total_s,

 (select count(*) from diana.tercero where cct ='30DTV0660Z' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV0660Z' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV0660Z') total_t,

 (select count(*) from diana.primero where cct ='30DTV0660Z' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV0660Z' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV0660Z' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV0660Z' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV0660Z' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV0660Z' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV0660Z') +
 (select count(*) from diana.segundo where cct ='30DTV0660Z') +
 (select count(*) from diana.tercero where cct ='30DTV0660Z') TOTAL_GRAL union


 SELECT (select nom_cct from diana.escuelas where cct ='30DTV0702H') nombre,
 (select count(*) from diana.primero where cct ='30DTV0702H' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV0702H' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV0702H') total_p,

 (select count(*) from diana.segundo where cct ='30DTV0702H' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV0702H' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV0702H') total_s,

 (select count(*) from diana.tercero where cct ='30DTV0702H' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV0702H' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV0702H') total_t,

 (select count(*) from diana.primero where cct ='30DTV0702H' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV0702H' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV0702H' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV0702H' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV0702H' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV0702H' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV0702H') +
 (select count(*) from diana.segundo where cct ='30DTV0702H') +
 (select count(*) from diana.tercero where cct ='30DTV0702H') TOTAL_GRAL union


 SELECT (select nom_cct from diana.escuelas where cct ='30DTV0741J') nombre,
 (select count(*) from diana.primero where cct ='30DTV0741J' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV0741J' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV0741J') total_p,

 (select count(*) from diana.segundo where cct ='30DTV0741J' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV0741J' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV0741J') total_s,

 (select count(*) from diana.tercero where cct ='30DTV0741J' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV0741J' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV0741J') total_t,

 (select count(*) from diana.primero where cct ='30DTV0741J' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV0741J' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV0741J' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV0741J' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV0741J' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV0741J' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV0741J') +
 (select count(*) from diana.segundo where cct ='30DTV0741J') +
 (select count(*) from diana.tercero where cct ='30DTV0741J') TOTAL_GRAL union


 SELECT (select nom_cct from diana.escuelas where cct ='30DTV0744G') nombre,
 (select count(*) from diana.primero where cct ='30DTV0744G' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV0744G' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV0744G') total_p,

 (select count(*) from diana.segundo where cct ='30DTV0744G' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV0744G' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV0744G') total_s,

 (select count(*) from diana.tercero where cct ='30DTV0744G' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV0744G' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV0744G') total_t,

 (select count(*) from diana.primero where cct ='30DTV0744G' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV0744G' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV0744G' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV0744G' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV0744G' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV0744G' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV0744G') +
 (select count(*) from diana.segundo where cct ='30DTV0744G') +
 (select count(*) from diana.tercero where cct ='30DTV0744G') TOTAL_GRAL union

 SELECT (select nom_cct from diana.escuelas where cct ='30DTV0948A') nombre,
 (select count(*) from diana.primero where cct ='30DTV0948A' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV0948A' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV0948A') total_p,

 (select count(*) from diana.segundo where cct ='30DTV0948A' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV0948A' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV0948A') total_s,

 (select count(*) from diana.tercero where cct ='30DTV0948A' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV0948A' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV0948A') total_t,

 (select count(*) from diana.primero where cct ='30DTV0948A' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV0948A' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV0948A' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV0948A' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV0948A' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV0948A' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV0948A') +
 (select count(*) from diana.segundo where cct ='30DTV0948A') +
 (select count(*) from diana.tercero where cct ='30DTV0948A') TOTAL_GRAL union

 SELECT (select nom_cct from diana.escuelas where cct ='30DTV0949Z') nombre,
 (select count(*) from diana.primero where cct ='30DTV0949Z' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV0949Z' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV0949Z') total_p,

 (select count(*) from diana.segundo where cct ='30DTV0949Z' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV0949Z' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV0949Z') total_s,

 (select count(*) from diana.tercero where cct ='30DTV0949Z' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV0949Z' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV0949Z') total_t,

 (select count(*) from diana.primero where cct ='30DTV0949Z' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV0949Z' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV0949Z' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV0949Z' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV0949Z' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV0949Z' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV0949Z') +
 (select count(*) from diana.segundo where cct ='30DTV0949Z') +
 (select count(*) from diana.tercero where cct ='30DTV0949Z') TOTAL_GRAL union

 SELECT (select nom_cct from diana.escuelas where cct ='30DTV0950P') nombre,
 (select count(*) from diana.primero where cct ='30DTV0950P' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV0950P' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV0950P') total_p,

 (select count(*) from diana.segundo where cct ='30DTV0950P' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV0950P' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV0950P') total_s,

 (select count(*) from diana.tercero where cct ='30DTV0950P' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV0950P' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV0950P') total_t,

 (select count(*) from diana.primero where cct ='30DTV0950P' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV0950P' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV0950P' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV0950P' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV0950P' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV0950P' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV0950P') +
 (select count(*) from diana.segundo where cct ='30DTV0950P') +
 (select count(*) from diana.tercero where cct ='30DTV0950P') TOTAL_GRAL union

 SELECT (select nom_cct from diana.escuelas where cct ='30DTV0951O') nombre,
 (select count(*) from diana.primero where cct ='30DTV0951O' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV0951O' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV0951O') total_p,

 (select count(*) from diana.segundo where cct ='30DTV0951O' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV0951O' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV0951O') total_s,

 (select count(*) from diana.tercero where cct ='30DTV0951O' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV0951O' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV0951O') total_t,

 (select count(*) from diana.primero where cct ='30DTV0951O' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV0951O' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV0951O' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV0951O' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV0951O' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV0951O' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV0951O') +
 (select count(*) from diana.segundo where cct ='30DTV0951O') +
 (select count(*) from diana.tercero where cct ='30DTV0951O') TOTAL_GRAL union

 SELECT (select nom_cct from diana.escuelas where cct ='30DTV1000X') nombre,
 (select count(*) from diana.primero where cct ='30DTV1000X' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV1000X' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV1000X') total_p,

 (select count(*) from diana.segundo where cct ='30DTV1000X' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV1000X' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV1000X') total_s,

 (select count(*) from diana.tercero where cct ='30DTV1000X' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV1000X' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV1000X') total_t,

 (select count(*) from diana.primero where cct ='30DTV1000X' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV1000X' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV1000X' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV1000X' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV1000X' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV1000X' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV1000X') +
 (select count(*) from diana.segundo where cct ='30DTV1000X') +
 (select count(*) from diana.tercero where cct ='30DTV1000X') TOTAL_GRAL union

 SELECT (select nom_cct from diana.escuelas where cct ='30DTV1090F') nombre,
 (select count(*) from diana.primero where cct ='30DTV1090F' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV1090F' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV1090F') total_p,

 (select count(*) from diana.segundo where cct ='30DTV1090F' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV1090F' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV1090F') total_s,

 (select count(*) from diana.tercero where cct ='30DTV1090F' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV1090F' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV1090F') total_t,

 (select count(*) from diana.primero where cct ='30DTV1090F' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV1090F' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV1090F' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV1090F' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV1090F' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV1090F' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV1090F') +
 (select count(*) from diana.segundo where cct ='30DTV1090F') +
 (select count(*) from diana.tercero where cct ='30DTV1090F') TOTAL_GRAL union

 SELECT (select nom_cct from diana.escuelas where cct ='30DTV1239G') nombre,
 (select count(*) from diana.primero where cct ='30DTV1239G' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV1239G' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV1239G') total_p,

 (select count(*) from diana.segundo where cct ='30DTV1239G' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV1239G' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV1239G') total_s,

 (select count(*) from diana.tercero where cct ='30DTV1239G' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV1239G' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV1239G') total_t,

 (select count(*) from diana.primero where cct ='30DTV1239G' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV1239G' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV1239G' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV1239G' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV1239G' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV1239G' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV1239G') +
 (select count(*) from diana.segundo where cct ='30DTV1239G') +
 (select count(*) from diana.tercero where cct ='30DTV1239G') TOTAL_GRAL union

 SELECT (select nom_cct from diana.escuelas where cct ='30DTV1248O') nombre,
 (select count(*) from diana.primero where cct ='30DTV1248O' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV1248O' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV1248O') total_p,

 (select count(*) from diana.segundo where cct ='30DTV1248O' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV1248O' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV1248O') total_s,

 (select count(*) from diana.tercero where cct ='30DTV1248O' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV1248O' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV1248O') total_t,

 (select count(*) from diana.primero where cct ='30DTV1248O' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV1248O' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV1248O' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV1248O' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV1248O' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV1248O' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV1248O') +
 (select count(*) from diana.segundo where cct ='30DTV1248O') +
 (select count(*) from diana.tercero where cct ='30DTV1248O') TOTAL_GRAL union

 SELECT (select nom_cct from diana.escuelas where cct ='30DTV1370P') nombre,
 (select count(*) from diana.primero where cct ='30DTV1370P' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV1370P' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV1370P') total_p,

 (select count(*) from diana.segundo where cct ='30DTV1370P' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV1370P' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV1370P') total_s,

 (select count(*) from diana.tercero where cct ='30DTV1370P' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV1370P' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV1370P') total_t,

 (select count(*) from diana.primero where cct ='30DTV1370P' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV1370P' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV1370P' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV1370P' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV1370P' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV1370P' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV1370P') +
 (select count(*) from diana.segundo where cct ='30DTV1370P') +
 (select count(*) from diana.tercero where cct ='30DTV1370P') TOTAL_GRAL union

 SELECT (select nom_cct from diana.escuelas where cct ='30DTV1399U') nombre,
 (select count(*) from diana.primero where cct ='30DTV1399U' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV1399U' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV1399U') total_p,

 (select count(*) from diana.segundo where cct ='30DTV1399U' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV1399U' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV1399U') total_s,

 (select count(*) from diana.tercero where cct ='30DTV1399U' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV1399U' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV1399U') total_t,

 (select count(*) from diana.primero where cct ='30DTV1399U' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV1399U' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV1399U' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV1399U' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV1399U' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV1399U' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV1399U') +
 (select count(*) from diana.segundo where cct ='30DTV1399U') +
 (select count(*) from diana.tercero where cct ='30DTV1399U') TOTAL_GRAL union

 SELECT (select nom_cct from diana.escuelas where cct ='30DTV1447N') nombre,
 (select count(*) from diana.primero where cct ='30DTV1447N' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV1447N' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV1447N') total_p,

 (select count(*) from diana.segundo where cct ='30DTV1447N' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV1447N' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV1447N') total_s,

 (select count(*) from diana.tercero where cct ='30DTV1447N' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV1447N' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV1447N') total_t,

 (select count(*) from diana.primero where cct ='30DTV1447N' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV1447N' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV1447N' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV1447N' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV1447N' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV1447N' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV1447N') +
 (select count(*) from diana.segundo where cct ='30DTV1447N') +
 (select count(*) from diana.tercero where cct ='30DTV1447N') TOTAL_GRAL union

 SELECT (select nom_cct from diana.escuelas where cct ='30DTV1448M') nombre,
 (select count(*) from diana.primero where cct ='30DTV1448M' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV1448M' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV1448M') total_p,

 (select count(*) from diana.segundo where cct ='30DTV1448M' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV1448M' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV1448M') total_s,

 (select count(*) from diana.tercero where cct ='30DTV1448M' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV1448M' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV1448M') total_t,

 (select count(*) from diana.primero where cct ='30DTV1448M' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV1448M' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV1448M' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV1448M' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV1448M' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV1448M' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV1448M') +
 (select count(*) from diana.segundo where cct ='30DTV1448M') +
 (select count(*) from diana.tercero where cct ='30DTV1448M') TOTAL_GRAL union

 SELECT (select nom_cct from diana.escuelas where cct ='30DTV1506M') nombre,
 (select count(*) from diana.primero where cct ='30DTV1506M' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV1506M' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV1506M') total_p,

 (select count(*) from diana.segundo where cct ='30DTV1506M' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV1506M' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV1506M') total_s,

 (select count(*) from diana.tercero where cct ='30DTV1506M' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV1506M' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV1506M') total_t,

 (select count(*) from diana.primero where cct ='30DTV1506M' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV1506M' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV1506M' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV1506M' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV1506M' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV1506M' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV1506M') +
 (select count(*) from diana.segundo where cct ='30DTV1506M') +
 (select count(*) from diana.tercero where cct ='30DTV1506M') TOTAL_GRAL union

 SELECT (select nom_cct from diana.escuelas where cct ='30DTV1555V') nombre,
 (select count(*) from diana.primero where cct ='30DTV1555V' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV1555V' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV1555V') total_p,

 (select count(*) from diana.segundo where cct ='30DTV1555V' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV1555V' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV1555V') total_s,

 (select count(*) from diana.tercero where cct ='30DTV1555V' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV1555V' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV1555V') total_t,

 (select count(*) from diana.primero where cct ='30DTV1555V' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV1555V' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV1555V' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV1555V' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV1555V' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV1555V' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV1555V') +
 (select count(*) from diana.segundo where cct ='30DTV1555V') +
 (select count(*) from diana.tercero where cct ='30DTV1555V') TOTAL_GRAL union

 SELECT (select nom_cct from diana.escuelas where cct ='30DTV1573K') nombre,
 (select count(*) from diana.primero where cct ='30DTV1573K' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV1573K' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV1573K') total_p,

 (select count(*) from diana.segundo where cct ='30DTV1573K' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV1573K' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV1573K') total_s,

 (select count(*) from diana.tercero where cct ='30DTV1573K' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV1573K' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV1573K') total_t,

 (select count(*) from diana.primero where cct ='30DTV1573K' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV1573K' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV1573K' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV1573K' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV1573K' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV1573K' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV1573K') +
 (select count(*) from diana.segundo where cct ='30DTV1573K') +
 (select count(*) from diana.tercero where cct ='30DTV1573K') TOTAL_GRAL union

 SELECT (select nom_cct from diana.escuelas where cct ='30DTV1804L') nombre,
 (select count(*) from diana.primero where cct ='30DTV1804L' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV1804L' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV1804L') total_p,

 (select count(*) from diana.segundo where cct ='30DTV1804L' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV1804L' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV1804L') total_s,

 (select count(*) from diana.tercero where cct ='30DTV1804L' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV1804L' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV1804L') total_t,

 (select count(*) from diana.primero where cct ='30DTV1804L' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV1804L' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV1804L' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV1804L' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV1804L' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV1804L' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV1804L') +
 (select count(*) from diana.segundo where cct ='30DTV1804L') +
 (select count(*) from diana.tercero where cct ='30DTV1804L') TOTAL_GRAL union

 SELECT (select nom_cct from diana.escuelas where cct ='30DTV1805K') nombre,
 (select count(*) from diana.primero where cct ='30DTV1805K' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV1805K' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV1805K') total_p,

 (select count(*) from diana.segundo where cct ='30DTV1805K' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV1805K' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV1805K') total_s,

 (select count(*) from diana.tercero where cct ='30DTV1805K' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV1805K' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV1805K') total_t,

 (select count(*) from diana.primero where cct ='30DTV1805K' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV1805K' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV1805K' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV1805K' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV1805K' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV1805K' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV1805K') +
 (select count(*) from diana.segundo where cct ='30DTV1805K') +
 (select count(*) from diana.tercero where cct ='30DTV1805K') TOTAL_GRAL union

 SELECT (select nom_cct from diana.escuelas where cct ='30DTV1808H') nombre,
 (select count(*) from diana.primero where cct ='30DTV1808H' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV1808H' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV1808H') total_p,

 (select count(*) from diana.segundo where cct ='30DTV1808H' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV1808H' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV1808H') total_s,

 (select count(*) from diana.tercero where cct ='30DTV1808H' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV1808H' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV1808H') total_t,

 (select count(*) from diana.primero where cct ='30DTV1808H' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV1808H' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV1808H' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV1808H' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV1808H' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV1808H' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV1808H') +
 (select count(*) from diana.segundo where cct ='30DTV1808H') +
 (select count(*) from diana.tercero where cct ='30DTV1808H') TOTAL_GRAL union

 SELECT (select nom_cct from diana.escuelas where cct ='30DTV1900O') nombre,
 (select count(*) from diana.primero where cct ='30DTV1900O' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV1900O' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV1900O') total_p,

 (select count(*) from diana.segundo where cct ='30DTV1900O' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV1900O' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV1900O') total_s,

 (select count(*) from diana.tercero where cct ='30DTV1900O' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV1900O' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV1900O') total_t,

 (select count(*) from diana.primero where cct ='30DTV1900O' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV1900O' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV1900O' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV1900O' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV1900O' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV1900O' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV1900O') +
 (select count(*) from diana.segundo where cct ='30DTV1900O') +
 (select count(*) from diana.tercero where cct ='30DTV1900O') TOTAL_GRAL union

 SELECT (select nom_cct from diana.escuelas where cct ='30DTV1906I') nombre,
 (select count(*) from diana.primero where cct ='30DTV1906I' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV1906I' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV1906I') total_p,

 (select count(*) from diana.segundo where cct ='30DTV1906I' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV1906I' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV1906I') total_s,

 (select count(*) from diana.tercero where cct ='30DTV1906I' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV1906I' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV1906I') total_t,

 (select count(*) from diana.primero where cct ='30DTV1906I' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV1906I' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV1906I' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV1906I' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV1906I' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV1906I' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV1906I') +
 (select count(*) from diana.segundo where cct ='30DTV1906I') +
 (select count(*) from diana.tercero where cct ='30DTV1906I') TOTAL_GRAL union

 SELECT (select nom_cct from diana.escuelas where cct ='30DTV2023O') nombre,
 (select count(*) from diana.primero where cct ='30DTV2023O' and sex ='HOMBRE' ) hombres_p,
 (select count(*) from diana.primero where cct ='30DTV2023O' and sex ='MUJER' ) mujeres_p,
 (select count(*) from diana.primero where cct ='30DTV2023O') total_p,

 (select count(*) from diana.segundo where cct ='30DTV2023O' and sex ='HOMBRE' ) hombres_s,
 (select count(*) from diana.segundo where cct ='30DTV2023O' and sex ='MUJER' ) mujeres_s,
 (select count(*) from diana.segundo where cct ='30DTV2023O') total_s,

 (select count(*) from diana.tercero where cct ='30DTV2023O' and sex ='HOMBRE' ) hombres_t,
 (select count(*) from diana.tercero where cct ='30DTV2023O' and sex ='MUJER' ) mujeres_t,
 (select count(*) from diana.tercero where cct ='30DTV2023O') total_t,

 (select count(*) from diana.primero where cct ='30DTV2023O' and sex ='HOMBRE' ) +
 (select count(*) from diana.tercero where cct ='30DTV2023O' and sex ='HOMBRE' ) +
 (select count(*) from diana.segundo where cct ='30DTV2023O' and sex ='HOMBRE' ) total_hombres,

 (select count(*) from diana.primero where cct ='30DTV2023O' and sex ='MUJER' ) +
 (select count(*) from diana.tercero where cct ='30DTV2023O' and sex ='MUJER' ) +
 (select count(*) from diana.segundo where cct ='30DTV2023O' and sex ='MUJER' ) total_mujeres,

 (select count(*) from diana.primero where cct ='30DTV2023O') +
 (select count(*) from diana.segundo where cct ='30DTV2023O') +
 (select count(*) from diana.tercero where cct ='30DTV2023O') TOTAL_GRAL";

  $res =$conexion->query($sql);
 ?>
