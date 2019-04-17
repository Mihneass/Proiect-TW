<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Administration</title>
    
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/stilizare-administrator.css">
</head>
<body>
    <div class="header">
        <a href="PaginaAdministrator.php"><img src="biciclete.png" class="bicla" alt="Logo"/></a>

        <div class="meniu">
            <a href="Calendar.php"><p class="calendar">Calendar</p></a>
            <a href="Cereri.php"><p class="cont">Comenzile mele</p></a>
	    <a href="formular.php"><p class="cont">Fac o cerere</p></a>
        </div>
    </div>
    <div class="corp">
        <div class="administrator-meniu">
            <button onclick="document.getElementById('PrimiteID').style.display = 'block'; document.getElementById('DisponibileID').style.display = 'none'; document.getElementById('ComandaID').style.display = 'none'">Cereri Primite</button>
            <button onclick="document.getElementById('DisponibileID').style.display = 'block'; document.getElementById('PrimiteID').style.display = 'none'; document.getElementById('ComandaID').style.display = 'none'">Piese Disponibile</button>
            <button onclick="document.getElementById('ComandaID').style.display = 'block'; document.getElementById('DisponibileID').style.display = 'none'; document.getElementById('PrimiteID').style.display = 'none'">Cereri Trimise</button>
        </div>
        <div id="PrimiteID" class="main-primite">

            
            <div class="containter-primite">
                <div class="cerere">
                    <a href="CerereTrimisa.php">
                        <p>Trimis acum .. ore</p>
                        <p>Ultima actualizare:</p>
                        <p>Detaliile cererii:</p>
                        <p>Status: In asteptare</p>
                    </a>
                </div>


                <div class="cerere">
                    <a href="CerereTrimisa.php">
                        <p>Trimis acum .. ore</p>
                        <p>Ultima actualizare:</p>
                        <p>Detaliile cererii:</p>
                        <p>Status: In asteptare</p>
                    </a>
                </div>
            </div>
        </div>
        

        <div id="DisponibileID" class="main-disponibile">
            <div class="containter-disponibile">
                <div class="piesa">
                    <img alt="piesa1" src="https://i.pinimg.com/originals/d8/43/fd/d843fdfefeccebd6272bcf61240a3d9e.jpg" />
                    <div>
                        <p>Nume: ...</p>
                        <p>In stoc inca din: ...</p>
                        <p>Pret platit: ...</p>
                        <p>Alte detalii: ...</p>
                    </div>
                </div>


                <div class="piesa">
                    <img alt="piesa2" src="https://i.pinimg.com/originals/d8/43/fd/d843fdfefeccebd6272bcf61240a3d9e.jpg" />
                    <div>
                        <p>Nume: ...</p>
                        <p>In stoc inca din: ...</p>
                        <p>Pret platit: ...</p>
                        <p>Alte detalii: ...</p>
                    </div>
                </div>
            </div>
        </div>


        <div id="ComandaID" class="main-comanda">
            <div class="containter-comanda">
                <div class="piesa-comanda">
                    <img alt="comanda1" src="https://sc01.alicdn.com/kf/HTB1h_1tNXXXXXXEXpXXq6xXFXXXz.jpg" />
                    <div>
                        <p>Nume: ...</p>
                        <p>In stoc inca din: ...</p>
                        <p>Pret platit: ...</p>
                        <p>Alte detalii: ...</p>
                    </div>
                </div>


                <div class="piesa-comanda">
                    <img alt="comanda2" src="https://sc01.alicdn.com/kf/HTB1h_1tNXXXXXXEXpXXq6xXFXXXz.jpg" />
                    <div>
                        <p>Nume: ...</p>
                        <p>In stoc inca din: ...</p>
                        <p>Pret platit: ...</p>
                        <p>Alte detalii: ...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>