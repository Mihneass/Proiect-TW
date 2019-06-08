--------------------------------------------------------
--  File created - marþi-mai-28-2019   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for Procedure GET_ONE_USER
--------------------------------------------------------
set define off;

  CREATE OR REPLACE PROCEDURE "STUDENT"."GET_ONE_USER" (uname IN VARCHAR, pass OUT VARCHAR,id_user OUT VARCHAR) AS
vsql VARCHAR2(2222);
user_not_found EXCEPTION;
BEGIN
  vsql:='SELECT PASS FROM USERI WHERE USER_NAME=''' || uname || '''';
  EXECUTE IMMEDIATE vsql INTO pass;
  vsql:='SELECT ID_USER FROM USERI WHERE USER_NAME=''' || uname || '''';
  EXECUTE IMMEDIATE vsql INTO id_user;
EXCEPTION 
WHEN NO_DATA_FOUND THEN
pass:='USER NOT FOUND';
END GET_ONE_USER;

/
