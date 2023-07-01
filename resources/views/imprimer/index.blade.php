<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link href="{{ public_path('assets/css/font_opensan.css') }}" rel="stylesheet">
    <style type="text/css">
     /*    body {
            font-family: 'Open Sans', sans-serif;
        } */
        ol,
        table td,
        table th {
            margin: 0;
            padding: 0;
        }

        td {
            padding: 0;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #f5f5f5;
            padding: 10px;
        }

        .c2 {
            padding: 5pt;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-bottom-width: 1pt;
            width: 160pt;
            border-top-color: #000000;
        }

        .c1 {
            color: #000000;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 16pt;
            font-family: "Bookman Old Style";
            font-style: normal;
        }

        p {
            margin: 0;
            color: #000000;
            font-size: 11pt;
            font-family: "Arial";
        }

        .subtitle {
            padding-top: 0pt;
            color: #666666;
            font-size: 15pt;
            padding-bottom: 16pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #f5f5f5;
            padding: 10px;
        }
    </style>
</head>

<body>
    <table>
        <tbody>
            <tr>
                <td><img alt="" src="{{ public_path('assets/images/forum_logo_7_edition.png') }}"
                        style="height: 150px" /></td>
            </tr>
        </tbody>
    </table>

    <br>
    <br>

    <table>
        <tbody>
            <tr>
                <td>
                    <p style="text-align:center">
                        <span
                            style="font-family: 'Bookman Old Style'; font-size:25.0pt;font-weight: bold; color: #db863d;">BADGE
                            DE PARTICIPANT AU FORUM</span>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>

    <br>
    <br>

    <table style="margin: 7%; margin-bottom:20%">
        <tbody>
            <tr>
                <td class="c2">
                    <span class="c1">NOM :</span>
                </td>
                <td class="c2" rowspan="1">
                    <span class="c1">mmm{{ $participant->nom }}</span>
                </td>
            </tr>
            <tr class="c7">
                <td class="c2" rowspan="1">
                    <span class="c1">PR&Eacute;NOM :</span>
                </td>
                <td class="c2" rowspan="1">
                    <span class="c1">{{ $participant->prenom }}</span>
                </td>
            </tr>
            <tr class="c7">
                <td class="c2" rowspan="1">
                    <span class="c1">FONCTION :</span>
                </td>
                <td class="c2" rowspan="1">
                    <span class="c1">{{ $participant->fonction }}</span>
                </td>
            </tr>
            <tr class="c7">
                <td class="c2" rowspan="1">
                    <span class="c1">T&Eacute;L&Eacute;PHONE :</span>
                </td>
                <td class="c2" rowspan="1">
                    <span class="c1">{{ $participant->telephone }}</span>
                </td>
            </tr>
        </tbody>
    </table>
    <p>
        <img src='{{ $qrcode }}' height="60">
    </p>

    <p style="margin-top: 10px;">
        <img alt="" src="{{ public_path('assets/images/bar_colorer.png') }}" style="height: 20%; width:100%" />
    </p>

   {{--  <div class="footer"> --}}
        <!-- Footer content here -->
    {{-- <img alt="" src="{{ public_path('assets/images/bar_colorer.png') }}" style="height: 20%" /> --}}
   {{--  </div> --}}
</body>

</html>
