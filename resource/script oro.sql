

#Permiso Usuarios
SELECT 
  `usuario`.`PER_CORREL`,
  `action`.`ACT_NOMBRE`,
  `controller`.`CON_NOMBRE`,
  `usu_has_act`.`TIPO`
FROM
  `usuario`
  INNER JOIN `usu_has_act` ON (`usuario`.`PER_CORREL` = `usu_has_act`.`PER_CORREL`)
  INNER JOIN `action` ON (`usu_has_act`.`ACT_CORREL` = `action`.`ACT_CORREL`)
  INNER JOIN `controller` ON (`action`.`CON_CORREL` = `controller`.`CON_CORREL`)

UNION

SELECT 
  `u`.`PER_CORREL`,
  `a`.`ACT_NOMBRE`,
  `c`.`CON_NOMBRE`,
  'ALLOW' AS `TIPO`
FROM
  `usuario` `u`
  INNER JOIN `usu_has_rol` ON (`u`.`PER_CORREL` = `usu_has_rol`.`PER_CORREL`)
  INNER JOIN `role` ON (`usu_has_rol`.`ROL_CORREL` = `role`.`ROL_CORREL`)
  INNER JOIN `rol_has_action` ON (`role`.`ROL_CORREL` = `rol_has_action`.`ROL_CORREL`)
  INNER JOIN `action` `a` ON (`rol_has_action`.`ACT_CORREL` = `a`.`ACT_CORREL`)
  INNER JOIN `controller` `c` ON (`a`.`CON_CORREL` = `c`.`CON_CORREL`)
WHERE
  NOT EXISTS(SELECT * FROM `usu_has_act` `ua` WHERE `u`.`PER_CORREL` = `ua`.`PER_CORREL` AND `a`.`ACT_CORREL` = `ua`.`ACT_CORREL`)