DROP TABLE useri CASCADE CONSTRAINTS;
/
DROP TABLE cereri CASCADE CONSTRAINTS;
/
DROP TABLE piese CASCADE CONSTRAINTS;
/
CREATE TABLE useri (
  id_user INT NOT NULL PRIMARY KEY,
  Admink VARCHAR2(15) NOT NULL,
  user_name VARCHAR2(55) NOT NULL,
  pass VARCHAR2(55) NOT NULL,
  nume VARCHAR2(15) NOT NULL,
  prenume VARCHAR2(30) NOT NULL,
  gender VARCHAR2(20),
  phone VARCHAR2(15),
  address  VARCHAR2(150) NOT NULL,
  email_address  VARCHAR2(50) NOT NULL,
  created_at DATE,
  updated_at DATE
)
/

CREATE TABLE cereri (
  idk INT NOT NULL,
  id_user INT NOT NULL,
  situatie VARCHAR2(50) NOT NULL,
  nume_obiect  VARCHAR2(50) NOT NULL,
  nr_obiecte INT NOT NULL,
  address  VARCHAR2(150) NOT NULL,
  detalii  VARCHAR2(755),
  created_at DATE,
  updated_at DATE,
  CONSTRAINT fk_cereri_idk FOREIGN KEY (idk) REFERENCES useri(id_user)
)
/
CREATE TABLE piese (
  id INT NOT NULL PRIMARY KEY,
  nume VARCHAR2(150) NOT NULL,
  created_at DATE,
  updated_at DATE
  )
/
SET SERVEROUTPUT ON;
DECLARE
 TYPE varr IS VARRAY(10070) OF varchar2(2755);
 
   lista_address varr := varr('gmail','yahoo','live','hotmail','me','outlook','aol','zoho');
   lista_address_oras varr := varr('Iasi','Galati','Bucuresti','Cluj','Roman','Buzau','Tulcea','Tecuci','Bacau','Vaslui','Barlad','Suceava','Botosani'
   ,'Vrancea','Sibiu','Timis','Timisoara');
   lista_address_strada varr := varr('Teiului','Stefan cel mare','Ion Creanga','Florilor','Revolutiei','Bucium','Copou','Berzei','Pietei','Universitatii','Medicinei',
   'Victoriei','Invierii','Garii','Dadlei');
  

  lista_nume varr := varr('Ababei','Acasandrei','Adascalitei','Afanasie','Agafitei','Agape','Aioanei','Alexandrescu','Alexandru','Alexe',
  'Alexii','Amarghioalei','Ambroci','Andonesei','Andrei','Andrian','Andrici','Andronic','Andros','Anghelina','Anita','Antochi','Antonie',
  'Apetrei','Apostol','Arhip','Arhire','Arteni','Arvinte','Asaftei','Asofiei','Aungurenci','Avadanei','Avram','Babei','Baciu','Baetu',
  'Balan','Balica','Banu','Barbieru','Barzu','Bazgan','Bejan','Bejenaru','Belcescu','Belciuganu','Benchea','Bilan','Birsanu','Bivol',
  'Bizu','Boca','Bodnar','Boistean','Borcan','Bordeianu','Botezatu','Bradea','Braescu','Budaca','Bulai','Bulbuc-aioanei','Burlacu',
  'Burloiu','Bursuc','Butacu','Bute','Buza','Calancea','Calinescu','Capusneanu','Caraiman','Carbune','Carp','Catana','Catiru','Catonoiu',
  'Cazacu','Cazamir','Cebere','Cehan','Cernescu','Chelaru','Chelmu','Chelmus','Chibici','Chicos','Chilaboc','Chile','Chiriac','Chirila',
  'Chistol','Chitic','Chmilevski','Cimpoesu','Ciobanu','Ciobotaru','Ciocoiu','Ciofu','Ciornei','Citea','Ciucanu','Clatinici','Clim','Cobuz',
  'Coca','Cojocariu','Cojocaru','Condurache','Corciu','Corduneanu','Corfu','Corneanu','Corodescu','Coseru','Cosnita','Costan','Covatariu',
  'Cozma','Cozmiuc','Craciunas','Crainiceanu','Creanga','Cretu','Cristea','Crucerescu','Cumpata','Curca','Cusmuliuc','Damian','Damoc',
  'Daneliuc','Daniel','Danila','Darie','Dascalescu','Dascalu','Diaconu','Dima','Dimache','Dinu','Dobos','Dochitei','Dochitoiu','Dodan',
  'Dogaru','Domnaru','Dorneanu','Dragan','Dragoman','Dragomir','Dragomirescu','Duceac','Dudau','Durnea','Edu','Eduard','Eusebiu','Fedeles',
  'Ferestraoaru','Filibiu','Filimon','Filip','Florescu','Folvaiter','Frumosu','Frunza','Galatanu','Gavrilita','Gavriliuc','Gavrilovici',
  'Gherase','Gherca','Ghergu','Gherman','Ghibirdic','Giosanu','Gitlan','Giurgila','Glodeanu','Goldan','Gorgan','Grama','Grigore','Grigoriu',
  'Grosu','Grozavu','Gurau','Haba','Harabula','Hardon','Harpa','Herdes','Herscovici','Hociung','Hodoreanu','Hostiuc','Huma','Hutanu','Huzum',
  'Iacob','Iacobuta','Iancu','Ichim','Iftimesei','Ilie','Insuratelu','Ionesei','Ionesi','Ionita','Iordache','Iordache-tiroiu','Iordan','Iosub',
  'Iovu','Irimia','Ivascu','Jecu','Jitariuc','Jitca','Joldescu','Juravle','Larion','Lates','Latu','Lazar','Leleu','Leon','Leonte','Leuciuc',
  'Leustean','Luca','Lucaci','Lucasi','Luncasu','Lungeanu','Lungu','Lupascu','Lupu','Macariu','Macoveschi','Maftei','Maganu','Mangalagiu',
  'Manolache','Manole','Marcu','Marinov','Martinas','Marton','Mataca','Matcovici','Matei','Maties','Matrana','Maxim','Mazareanu','Mazilu',
  'Mazur','Melniciuc-puica','Micu','Mihaela','Mihai','Mihaila','Mihailescu','Mihalachi','Mihalcea','Mihociu','Milut','Minea','Minghel',
  'Minuti','Miron','Mitan','Moisa','Moniry-abyaneh','Morarescu','Morosanu','Moscu','Motrescu','Motroi','Munteanu','Murarasu','Musca',
  'Mutescu','Nastaca','Nechita','Neghina','Negrus','Negruser','Negrutu','Nemtoc','Netedu','Nica','Nicu','Oana','Olanuta','Olarasu',
  'Olariu','Olaru','Onu','Opariuc','Oprea','Ostafe','Otrocol','Palihovici','Pantiru','Pantiruc','Paparuz','Pascaru','Patachi','Patras',
  'Patriche','Perciun','Perju','Petcu','Pila','Pintilie','Piriu','Platon','Plugariu','Podaru','Poenariu','Pojar','Popa','Popescu',
  'Popovici','Poputoaia','Postolache','Predoaia','Prisecaru','Procop','Prodan','Puiu','Purice','Rachieru','Razvan','Reut','Riscanu',
  'Riza','Robu','Roman','Romanescu','Romaniuc','Rosca','Rusu','Samson','Sandu','Sandulache','Sava','Savescu','Schifirnet','Scortanu',
  'Scurtu','Sfarghiu','Silitra','Simiganoschi','Simion','Simionescu','Simionesei','Simon','Sitaru','Sleghel','Sofian','Soficu','Sparhat',
  'Spiridon','Stan','Stavarache','Stefan','Stefanita','Stingaciu','Stiufliuc','Stoian','Stoica','Stoleru','Stolniceanu','Stolnicu','Strainu',
  'Strimtu','Suhani','Tabusca','Talif','Tanasa','Teclici','Teodorescu','Tesu','Tifrea','Timofte','Tincu','Tirpescu','Toader','Tofan','Toma',
  'Toncu','Trifan','Tudosa','Tudose','Tuduri','Tuiu','Turcu','Ulinici','Unghianu','Ungureanu','Ursache','Ursachi','Urse','Ursu','Varlan',
  'Varteniuc','Varvaroi','Vasilache','Vasiliu','Ventaniuc','Vicol','Vidru','Vinatoru','Vlad','Voaides','Vrabie','Vulpescu','Zamosteanu','Zazuleac');
  
  lista_prenume_fete varr := varr('Adina','Alexandra','Alina','Ana','Anca','Anda','Andra','Andreea','Andreia','Antonia','Bianca','Camelia',
  'Claudia','Codrina','Cristina','Daniela','Daria','Delia','Denisa','Diana','Ecaterina','Elena','Eleonora','Elisa','Ema','Emanuela','Emma',
  'Gabriela','Georgiana','Ileana','Ilona','Ioana','Iolanda','Irina','Iulia','Iuliana','Larisa','Laura','Loredana','Madalina','Malina','Manuela',
  'Maria','Mihaela','Mirela','Monica','Oana','Paula','Petruta','Raluca','Sabina','Sanziana','Simina','Simona','Stefana','Stefania','Tamara',
  'Teodora','Theodora','Vasilica','Xena');
 
  lista_prenume_baieti varr := varr('Adrian','Alex','Alexandru','Alin','Andreas','Andrei','Aurelian','Beniamin','Bogdan','Camil','Catalin',
  'Cezar','Ciprian','Claudiu','Codrin','Constantin','Corneliu','Cosmin','Costel','Cristian','Damian','Dan','Daniel','Danut','Darius','Denise',
  'Dimitrie','Dorian','Dorin','Dragos','Dumitru','Eduard','Elvis','Emil','Ervin','Eugen','Eusebiu','Fabian','Filip','Florian','Florin',
  'Gabriel','George','Gheorghe','Giani','Giulio','Iaroslav','Ilie','Ioan','Ion','Ionel','Ionut','Iosif','Irinel','Iulian','Iustin','Laurentiu',
  'Liviu','Lucian','Marian','Marius','Matei','Mihai','Mihail','Nicolae','Nicu','Nicusor','Octavian','Ovidiu','Paul','Petru','Petrut','Radu',
  'Rares','Razvan','Richard','Robert','Roland','Rolland','Romanescu','Sabin','Samuel','Sebastian','Sergiu','Silviu','Stefan','Teodor','Teofil',
  'Theodor','Tudor','Vadim','Valentin','Valeriu','Vasile','Victor','Vlad','Vladimir','Vladut');

  lista_piese varr := varr('Cadru','Furca','Roti','Frane','Transmisie','Diverse','Servicii');
  lista_tari varr := varr('Rusia','Romania','Germania','Grecia','Turcia','Spania','Anglia','Suedia','Albania','Bulgaria'); 
  lista_gen varr := varr('Drama','Romance','Poetry','Fiction','Fabule','Horror','Psihologic','Jurnal','Carte de colorat',
  'Povesti pentru copii','Istorie'); 
  lista_des varr := varr('Pedalele au o problema estetica.','Asi dori sa imi schimbati furca cu cea pe care o voi aduce eu.','+ reparatii la suspensie',
  'Ar fi super ok sa o reparati pana pe 22 luna aceasta.','roata din fata are un joc','vrea totul pe culoare mov','+reglare frane','am folosit bicicleta pe autostrada');
   
  v_servici VARCHAR2(255);
  v_nume VARCHAR2(255);
  v_prenume VARCHAR2(255);
  v_prenume1 VARCHAR2(255);
  v_prenume2 VARCHAR2(255);
 
  v_temp int;
  v_temp1 int;
  v_temp2 int;
  v_temp3 int;
  v_temp_date date;
   
  v_username VARCHAR2(255);
  v_pass VARCHAR2(255);

  v_gen VARCHAR2(255);
 
  
  v_det VARCHAR2(755);
  v_oras VARCHAR2(255);
  v_strada VARCHAR2(255);
  v_phone VARCHAR2(255);
  v_address VARCHAR2(255);
  v_mail VARCHAR2(255);
v_si VARCHAR2(255);
 v_admin VARCHAR2(15);

BEGIN
     DBMS_OUTPUT.PUT_LINE('Inserarea a 1000 useri...');
   
   FOR v_i IN 1..1000 LOOP
      v_nume := lista_nume(TRUNC(DBMS_RANDOM.VALUE(0,lista_nume.count))+1);
      IF (DBMS_RANDOM.VALUE(0,100)<50) THEN     
      v_gen:='fata';
         v_prenume1 := lista_prenume_fete(TRUNC(DBMS_RANDOM.VALUE(0,lista_prenume_fete.count))+1);
         LOOP
            v_prenume2 := lista_prenume_fete(TRUNC(DBMS_RANDOM.VALUE(0,lista_prenume_fete.count))+1);
            exit when v_prenume1<>v_prenume2;
         END LOOP;
       ELSE
       v_gen:='baiat';
         v_prenume1 := lista_prenume_baieti(TRUNC(DBMS_RANDOM.VALUE(0,lista_prenume_baieti.count))+1);
         LOOP
            v_prenume2 := lista_prenume_baieti(TRUNC(DBMS_RANDOM.VALUE(0,lista_prenume_baieti.count))+1);
            exit when v_prenume1<>v_prenume2;
         END LOOP;       
       END IF;
       
       IF (DBMS_RANDOM.VALUE(0,100)<60) THEN  
          IF LENGTH(v_prenume1 || ' ' || v_prenume2) <= 20 THEN
            v_prenume := v_prenume1 || ' ' || v_prenume2;
          END IF;
          else 
             v_prenume:=v_prenume1;
        END IF;    
        
      v_oras := lista_address_oras(TRUNC(DBMS_RANDOM.VALUE(0,lista_address_oras.count))+1);
      v_strada := lista_address_strada(TRUNC(DBMS_RANDOM.VALUE(0,lista_address_strada.count))+1);
      v_phone:='07'||TRUNC(DBMS_RANDOM.VALUE(2,9))||TRUNC(DBMS_RANDOM.VALUE(1000000,9999999));
      v_address:='Oras: '||v_oras||', strada: '||v_strada|| ' nr: '||TRUNC(DBMS_RANDOM.VALUE(1,765));
      v_pass:=v_nume||TRUNC(DBMS_RANDOM.VALUE(0,40));
      v_username:=v_nume||v_i;
      v_mail:=v_username||'@'||lista_address(TRUNC(DBMS_RANDOM.VALUE(0,lista_address.count))+1)||'.com';
                        v_admin:='false';
                        if(v_i<4)then
                        v_admin:='true';
                         END IF;
                        
    insert into USERI values(v_i,v_admin,v_username,v_pass, v_nume, v_prenume, v_gen,v_phone,v_address,v_mail, sysdate, sysdate);
   END LOOP;
 DBMS_OUTPUT.PUT_LINE('Inserarea a 10000 useri... GATA !');
  
  -------------------
      DBMS_OUTPUT.PUT_LINE('Inserarea a 60 cereri...');
   
   FOR v_i IN 1..60 LOOP
   
     v_det := lista_des(TRUNC(DBMS_RANDOM.VALUE(0,lista_des.count))+1);
      v_oras := lista_address_oras(TRUNC(DBMS_RANDOM.VALUE(0,lista_address_oras.count))+1);
      v_strada := lista_address_strada(TRUNC(DBMS_RANDOM.VALUE(0,lista_address_strada.count))+1);
      v_address:='Oras: '||v_oras||', strada: '||v_strada|| ' nr: '||TRUNC(DBMS_RANDOM.VALUE(1,765));
      
      v_servici := lista_piese(TRUNC(DBMS_RANDOM.VALUE(0,lista_piese.count))+1);
      v_temp:=DBMS_RANDOM.VALUE(1,3);
       v_si:='rejected';
      if(v_temp=1)then
      v_si:='pending';
      end if;
      if(v_temp=2)then
      v_si:='accepted';
      end if;
      
       
    
                        
    insert into cereri values(v_i,(DBMS_RANDOM.VALUE(0,1000)+1),v_si,v_servici,(DBMS_RANDOM.VALUE(0,10)),v_address,v_det, sysdate, sysdate);
   END LOOP;
   DBMS_OUTPUT.PUT_LINE('Inserarea a 60 cereri... GATA !');
   
   
   
   -------------------
   ---------------------
   ----tranzactii----
    DBMS_OUTPUT.PUT_LINE('Inserarea a 5000 piese...');
   
   FOR v_i IN 1..5000 LOOP
     
        v_servici := lista_piese(TRUNC(DBMS_RANDOM.VALUE(0,lista_piese.count))+1);
      
    
    
                        
    insert into piese values(v_i,v_servici, sysdate, sysdate);
   END LOOP;
   DBMS_OUTPUT.PUT_LINE('Inserarea a 5000 piese... GATA !');
    
END;
/


select count(*)|| ' cereri inserate' from cereri;
select count(*)|| ' piese inserate' from piese;
select count(*)|| ' useri inserati' from useri;



