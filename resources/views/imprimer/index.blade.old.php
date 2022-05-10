<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        /* Globals */
        .pos {
            position: absolute;
            z-index: 0;
            left: 0px;
            top: 0px
        }
        footer {
            display: flex;
            justify-content: center;
            align-items: center;
            height: var(--footer-height);
            color: white;
            font-weight: 700;
            background-image: linear-gradient(70deg, yellow 0%, orange 25%, teal 25%, cyan 50%, red 50%, magenta 75%, black 75%, grey 100%);
            /* background-image: linear-gradient(70deg, black 0%, cyan 100%); */
        }
    </style>
</head>

<body>
    <table>
        <tbody>
            <tr>
                <td><img alt="" src="{{ public_path('assets/images/forum_logo.png') }}" style="height: 150px" /></td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <td>
                    <p style="text-align:center">
                        <span style="font-size:25.0pt;font-weight: bold; color: #db863d;">BADGE DE PARTICIPANT AU FORUM</span>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <td style="font-weight: bold;">NOM :</td>
                <td>{{ $participant->nom }}</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">PRENOM :</td>
                <td>{{ $participant->prenom }}</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">FONCTION :</td>
                <td>{{ $participant->fonction }}</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">PAYS :</td>
                <td>{{ $participant->pay->nom }}</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">T&Eacute;L&Eacute;PHONE :</td>
                <td>{{ $participant->telephone }}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table>
        <tbody>
            <tr>
                <td><img alt="" src="{{ public_path('assets/images/logo_afrika_transtour.png') }}" style="height: 20px" /></td>
                <td><img alt="" src="{{ public_path('assets/images/ministeredestransports.png') }}" style="height: 20px" /></td>
            </tr>
        </tbody>
    </table>

    <footer class="footer">
        <table>
            <tbody>
                <tr>
                    <td>
                        <img alt="" src="{{ public_path('assets/images/bar_colorer.png') }}" style="height: 15px" />
                    </td>
                </tr>
            </tbody>
        </table>
    </footer>

</body>

</html>
