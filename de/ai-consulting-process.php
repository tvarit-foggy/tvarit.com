<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="./assets/img/kit/free/apple-icon.png">
    <link rel="icon" href="./img/favicon.png">
    <title>KI Beratungs-Prozess</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/flickity.css">
    <link rel="stylesheet" href="css/animate.css">
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300i,400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link href="https://unpkg.com/ionicons@4.5.0/dist/css/ionicons.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <![endif]-->

</head>

<body>
    <!------------------------ main menu start ---------------------->
    <?php 
     include 'header.php';
     ?>
    <!------------------------ main menu end ------------------------>


    <!------------------------ CONSULTING start --------------------->
    <div class="section-padding mt-5" id="downClick">
        <div class="container">
            <div class="text-center">
                <div class="title">
                    <div class="text-big60">DATENEXTRAKTION UND <br> INTEGRATION</div>
                </div>
                <div class="short-line mx-auto bg-red"></div>
                <p class=" fs-16">
                Unser Team bringt umfangreiches Know-how über verschiedene Datenquellen mit. 
                Es kann sich dabei um historische Daten, Energiezähler, Laborqualitätssysteme, MES, ERP, PLCs, 
                Tabellenkalkulation, Protokolle, SQL, PCs, Chargenberichte, MTConnect, oder OPC-UA handeln. Unsere Beratung zur Datenextraktion ist grundsätzlich in fünf Teile gegliedert.
                </p>
                </div>
                <br>
                <div class="row mb-4 p-0 no-gutters align-items-center">
                    <div class="col-lg order-2 order-lg-1">
                        <div class="p-4" style="padding: 0.6rem !important;">
                            <ul class="ul-list-bullet">
                                <li>
                                Datenextraktion von Steuerungssystemen: Unsere Experten unterstützen Sie bei der Extraktion der Daten aus verschiedenen Hardware-Controller-Systemen wie PLC, SCADA, DCS, etc.
                                </li>
                                <li>
                                Integration über Bussysteme: Unsere Experten bringen das Know-how für verschiedene Bussysteme wie J-Bus, Mod-Bus, ProfiBus, EthNet, EthCat, CAN-Bus, etc. mit.
                                </li>
                                <li>
                                IT-Systeme: Die Integration mit IT-Systemen erfolgt entweder über REST/SOAP-APIs oder es werden JDBC/ODBC-Konnektoren verwendet. Einige der Systeme, mit denen wir arbeiten, sind SAP ERP, PP, WM, MES, SPS-Steuerung, APC, etc.
                                </li>
                                <li>
                                Integration von Datenspeichersystemen: Wir unterstützen Sie mit verschiedenen DBMS-Technologien wie MySQL, Postgres, NoSQL-Datenbanken wie MongoDB, InfluxDB, ElasticSearch, Hadoop, etc. Weiterhin unterstützen wir Sie beim Aufbau von Data Lakes und Data Warehouses mit verschiedenen DBMS-Technologien.
                                </li>
                                <li>
                                Integration von Kommunikationsprotokollen: Dieser Abschnitt umfasst die Integration des Datenstroms über verschiedene Datenkommunikationsprotokolle wie TCP/IP, FTP, OPC-UA, MQTT, MTConnect, PI AI-Systeme usw.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg order-1 order-lg-2">
                        <div class="AmimgBox">
                            <img src="img/Achieve-more.jpg" alt="Achieve More" class="img-fluid">
                        </div>
                    </div>
            </div>
        </div>
        <!------------------------ CONSULTING end --------------------->

        <!------------------------ CONSULTING start --------------------->
        <div class="section-padding">
            <div class="container">
                <div class="text-center">
                    <div class="title">
                        <div class="text-big60">Data Preparation</div>
                    </div>
                    <div class="short-line mx-auto bg-red"></div>
                    <p class="text-p">
                    Die Daten, die aus verschiedenen Quellen gesammelt werden, 
                    können verunreinigte Daten enthalten, weshalb die Bereinigung der Daten vor dem Laden erfolgen sollte. 
                    Das Problem mit verunreinigten Daten ist, dass es keinen einheitlichen Ablauf gibt, um damit umzugehen. 
                    Die verunreinigten Werte beeinträchtigen die Leistung und die Prognosefähigkeit. Fehler in den Daten tragen das Risiko, die statistischen Parameter zu verändern. Die Art und Weise, wie sie mit Ausreißern interagieren, wirkt sich wiederum auf unsere Statistiken aus. Die Schlussfolgerungen können daher irreführend sein.
                    </p>
                </div>
                <br>
                <div class="row mb-4 align-items-center">
                    <div class="col-lg">
                        <div class="AmimgBox">
                            <img src="img/Data-preparation.jpg" alt="Data Preparation" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="p-lg-4 pt-4 text-lg-left">
                            <ul class="ul-list-bullet">
                                <li>Schlechte und verunreinigte Daten können verschiedene Ursachen haben:</li>
                                <li>Fehler in der SPS aufgrund von Stromausfällen, die zu fehlenden Daten führen.</li>
                                <li>Falsche Konfiguration von Maschinensteuerungen führt zu unzulässigen Werten für einen Sensor.</li>
                                <li>Netzwerkprobleme wie 3G, 4G, Wi-Fi usw. führen zu unvollständigen Daten.</li>
                                <li>Falsche Abfragen, die zum Extrahieren der Daten aus Datenbanken geschrieben wurden.</li>
                                <li>Fehler, die beim Zusammenführen von Daten aus mehreren Datenquellen auftreten.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <br>
                <div class="centerTitle">
                <p class="text-p">
                Häufig werden die Ergebnisse von Arbeitsaufträgen oder Produktqualität manuell erfasst, 
                während für Sensordaten automatisierte Systeme vorhanden sind, 
                so dass die Kombination der Daten zu Protokollen mit schlechten Daten führt.
                </p>
                <p class="text-p">
                Für den Umgang mit schlechter Datenqualität und fehlerhaften Daten setzen wir unser leistungsfähiges Toolkit ein. Es enthält vorprogrammierte algorithmische Module zur Datenbereinigung, wie z.B. Sanity Checks, die automatisierte Bereinigung fehlender Daten, Multikollinearitätsanalysen, Mahalanobis-Abstand, Überprüfung der Datenverteilung, Ableitung des Best Buckets usw. Nach der Bereinigung der Daten werden bei der Anwendung der ML/DL-Algorithmen präzise Ergebnisse erzielt. Daher sind konsistente Daten für eine zuverlässige Entscheidungsfindung unerlässlich. Wir bei Tvarit bereinigen die Daten so akkurate wie möglich, um die bestmögliche Lösung zu erhalten.
                </p>
              </div>
            </div>
        </div>
        <!------------------------ CONSULTING end --------------------->

        <div class="section-padding">
            <div class="container">
                <div class="centerTitle">
                    <div class="text-big60">Data Labelling</div>
                </div>
                <div class="short-line mx-auto bg-red"></div>
                <div class="text-p centerTitle">
                Wir stellen Ihnen Data Labelling-Teams zur Verfügung. Bereichern Sie Ihre riesigen Datenmengen in einem transparenten und agilen Ansatz mit hoher Genauigkeit, Konsistenz und Geschwindigkeit. Wir bieten die Kennzeichnung aller Arten von Daten wie Bild-, Text-, Video-, Sensor- und Zeitreihendaten an.
                </div>
            </div>
        </div>

        <div class="section-padding">
            <div class="container">
                <div class="text-center">
                    <div class="title">
                        <div class="text-big60">DATENHARMONISIERUNG</div>
                    </div>
                    <div class="short-line mx-auto bg-red"></div>
                    <p class="text-p">
                    Die Welle der Digitalisierung und Datenerfassung der letzten Jahre hat jedes einzelne 
                    Unternehmen gezwungen, sich auf die Datenerfassung zu konzentrieren. Die größte Schwierigkeit für 
                    produzierende Unternehmen besteht heute darin, herauszufinden, welche Daten wertvolle Informationen tragen. 
                    Riesige Datenmengen werden von Maschinen generiert, ausgestattet mit einer Vielzahl von Sensoren zur Datensammlung im Rhythmus von einer Sekunde, manchmal sogar von einer Millisekunde. Wertvolle Erkenntnisse liegen daher eher in der Qualität und weniger in der Quantität der Daten.
                    <p class="text-p fs-12">
                    Intelligente Transformationen wie FFT, Wavelet, Approximierte Entropie usw. können auf Hochfrequenzdaten angewendet werden. Sie erfassen z.B. Schwingungsdaten von einer CNC-Maschinenspindel mit einer Rate von 2 kHz, was innerhalb eines Tages mehrere Gigabyte ergibt. Die Anwendung der "Slot-Aggregation" wird viel einfacher, da Sie leicht erkennen können, dass sich Ihre CNC-Maschinenspindel in etwa 99% der Fälle normal verhält. Diese "normalen" Daten können ohne Informationsverlust zu einer geringeren Frequenz aggregiert werden (z.B. 1 Datenpunkt pro Minute). Lediglich die in den restlichen 1 % der Zeit erfassten Daten Ihrer CNC-Maschinenspindel stellen Anomalien dar (bei Verschleiß oder Werkzeugbruch) und sollten daher nicht aggregiert werden. Somit wird diese Datenkomprimierung von mehreren GBs auf MBs an Daten ermöglicht, ohne die Genauigkeit zu beeinträchtigen.
                    </p>
                </div>
                <br>
            </div>
        </div>

        <div class="section-padding">
            <div class="container">
                <div class="text-center">
                    <div class="text-center title">
                        <div class="text-big60 mb-0"><span class="red">KI</span> BETRIEBENES DATENEMPFEHLUNGSSYSTEM</div>
                        <!-- <p class="text-first red">recommendation system</p> -->
                        <div class="short-line mx-auto bg-red"></div>
                    </div>
                    <p class="text-p">
                    Unsere Experten haben umfassende Erfahrung mit verfahrenstechnischen Anlagen. Bei diesen ist die Berechnung des genauen Sollwerts verschiedener Parameter sehr wichtig, um zukünftige Anomalien zu vermeiden. Dafür haben unsere Data Scientists eine ML/DL-unterstützte Empfehlungsmaschine gebaut. Darüber hinaus wird das Konfidenzniveau dieser von der KI vorhergesagten Sollwerte angegeben und konkrete Aktionsempfehlungen für Anwender genannt. Bei der Erstellung dieser Empfehlungen werden die Grenzen der optimierbaren Eingabeparameter berücksichtigt. Dadurch kann Domänenwissen in das ML/DL-Modell integriert und die Bereitstellung von sinnvollen Aktionsempfehlungen für die Benutzer sichergestellt werden.
                    </p>
                </div>
            </div>
        </div>
        <br>

        <!------------------------Countdown start --------------------->
        <?php
    include 'change_we_brought.php'
    ?>
        <!------------------------Countdown end --------------------->

        <!------------------------Automated slide start --------------------->
        <?php
    include 'change_we_bring.php'
    ?>
        <!------------------------Automated slide end --------------------->
        <!------------------------footer start --------------------->
        <?php
    include 'footer.php'
    ?>
        <!------------------------footer end --------------------->
        <!-- script start -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/SmoothScroll.js"></script>
        <script src="js/flickity.pkgd.min.js"></script>
        <script src="js/readmore.js"></script>
        <script src="js/counting.js"></script>
        <script src="js/script.js"></script>
        <script src="js/parallax.js"></script>

</body>

</html>