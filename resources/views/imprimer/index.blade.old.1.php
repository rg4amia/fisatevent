<html>
<head>
    <title>BADGE FORUM</title>
    <style type="text/css">
        <!--
        body { font-family: Arial; font-size: 41.3px }
        .pos { position: absolute; z-index: 0; left: 0px; top: 0px }
        -->
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<nobr><nowrap>
        <div class="pos" id="_0:0" style="top:0">
            <img name="_827:583" src="{{ public_path('assets/images/page_001.jpg') }}" height="200" border="0" usemap="#Map">
        </div>
        <div class="pos" id="_70:264" style="top:264;left:70">
            <span id="_33.7" style="font-weight:bold; font-family:Arial; font-size:33.7px; color:#db853d">
                BADGE DE PARTICIPANT AU </span>
        </div>
        <div class="pos" id="_232:311" style="top:311;left:232">
            <span id="_38.1" style="font-weight:bold; font-family:Arial; font-size:38.1px; color:#db853d">
                FORUM
            </span>
        </div>
        <div class="pos" id="_76:448" style="top:448;left:76">
            <span id="_25.0" style="font-weight:bold; font-family:Arial; font-size:25.0px; color:#000000">
                NOM :  {{ $participant->nom }}
            </span>
        </div>
        <div class="pos" id="_76:491" style="top:491;left:76">
            <span id="_27.2" style="font-weight:bold; font-family:Arial; font-size:27.2px; color:#000000">
                PRENOM : {{ $participant->prenom }}
            </span>
        </div>
        <div class="pos" id="_76:535" style="top:535;left:76">
            <span id="_24.4" style="font-weight:bold; font-family:Arial; font-size:24.4px; color:#000000">
                FONCTION : {{ $participant->fonction }}
            </span>
        </div>
        <div class="pos" id="_76:579" style="top:579;left:76">
            <span id="_27.2" style="font-weight:bold; font-family:Arial; font-size:27.2px; color:#000000">
                PAYS : {{ $participant->pay->nom }}
            </span>
        </div>
        <div class="pos" id="_73:623" style="top:623;left:73">
            <span id="_23.9" style="font-weight:bold; font-family:Arial; font-size:23.9px; color:#000000">
                TELEPHONE : {{ $participant->telephone }}
            </span>
        </div>
    </nowrap>
</nobr>
</body>
</html>
