<html lang="en">

<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="">
    <meta name="application-name" content="WhatsApp Parsing Ilham">
    <meta name="theme-color" content="#27ab27">
    <meta name="mobile-web-app-capable" content="YES">
    <meta name="apple-itunes-app" content="">
    <meta name="google-play-app" content="">
    <meta name="robots" content="index,follow">
    <meta name="author" content="Ilham Anasruloh">

    <meta name="rating" content="general">
    <meta property="fb:app_id" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="WhatsApp Parsing Ilham">
    <meta property="og:locale" content="id_ID">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@ilham_arl">
    <meta name="twitter:creator" content="@ilham_arl">

    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

    <title>WhatsApp Parsing</title>
    <meta name="description" content="Whatsapp Parsing, Parser for WhatsApp Chats, and Easy to Parsing WhatsApp Chat">
    <link rel="canonical" href="https://arl.ngeartstudio.com/">
    <meta property="og:url" content="https://arl.ngeartstudio.com/">
    <meta property="og:title" content="Whatsapp Parsing, Parser for WhatsApp Chats, and Easy to Parsing WhatsApp Chat">
    <meta property="og:image" content="/general/img/pictures/banner-default.png">
    <meta property="og:description" content="Whatsapp Parsing, Parser for WhatsApp Chats, Easy Parsing WhatsApp Chat">
    <meta name="twitter:url" content="https://arl.ngeartstudio.com/">
    <meta name="twitter:title" content="Whatsapp Parsing, Parser for WhatsApp Chats, and Easy to Parsing WhatsApp Chat">
    <meta name="twitter:description" content="Whatsapp Parsing, Parser for WhatsApp Chats, Easy Parsing WhatsApp Chat">
    <meta name="twitter:image" content="/general/img/pictures/banner-default.png">
    <meta name="keyphrases" content="Parsing, Parser, WhatsApp, Parsing WhatsApp, WhatsApp Parsing, Parsing Chat WA, Parsing Chat WhatsApp, WhatsApp Chat Parsing, Parsing WA, WA Parsing, WA Parser, Parser WA, Explode PHP, Explode Text PHP">
    <meta name="classification" content="Tools, Php, Html, WhatsApp Chat, WhatsApp, Parsing Data, Parsing PHP, Parsing WhatsApp, WhatsApp Parsing, Explode PHP">
    <meta name="keywords" content="Parsing, Parser, WhatsApp, Parsing WhatsApp, WhatsApp Parsing, Parsing Chat WA, Parsing Chat WhatsApp, WhatsApp Chat Parsing, Parsing WA, WA Parsing, WA Parser, Parser WA, Explode PHP, Explode Text PHP">


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.4/css/buttons.bootstrap4.min.css">

</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 order-md-1">
                <h4 class="mb-3">WhatsApp Parsing V.2</h4>

                <form method="POST" action="">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Paste Chat here :</label>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <input type="button" value="Reset" onclick="javascript:eraseText();" class="btn btn-default btn-sm btn-outline-dark float-right">
                        </div>
                        <div class="col-md-12 mb-3">
                            <textarea id="masukan" type="text" name="something" value="<?php isset($_POST['something']) ? htmlspecialchars($_POST['something']) : '' ?>" class="form-control" rows="10"></textarea>
                        </div>

                    </div>
                    <input type="submit" name="submit" value="PARSING" class="btn btn-success btn-lg btn-block" />
                    <br>
                    <a href="index.php" class="btn btn-sm btn-info text-right">Try it <b>Version 1</b></a>
                </form>

            </div>

            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Parsing Result</h4>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <input type="button" value="Select All" class="btn btn-sm btn-info" onclick="selectElementContents(document.getElementById('tablecopy'));" />
                        <label>( <kbd>Ctrl</kbd> + <kbd>C</kbd> then Paste in Your workspace )</label>
                        <div class="table-responsive-sm">
                            <table id="tablecopy" class="table table-striped rounded">
                                <thead>
                                    <tr>
                                        <th style="width: 70px;">Date</th>
                                        <th>Name</th>
                                        <th class="text-center">Chat Field</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

function multiexplode ($delimiters,$string)
{
    $ready	= str_replace($delimiters, $delimiters[0], $string);
    $launch	= explode($delimiters[0], $ready);
    return  $launch;
}

if(isset($_POST['submit']))
{
  $rows	= explode("\n", $_POST['something']);

  foreach($rows as $row => $data)
  {
      $row_data = multiexplode(array(' - ',': '), $data);
      
      if (!isset($row_data[0]) || !isset($row_data[1]) || !isset($row_data[2])) 
      {
          $row_data[0] = NULL;
          $row_data[1] = NULL;
          $row_data[2] = NULL;
      }

      $info[$row]['datetime']     = $row_data[0];
      $info[$row]['name_chat']    = $row_data[1];
      $info[$row]['chat_user']    = $row_data[2];

      $datetime 					= $info[$row]['datetime'];	
      $namechat 					= $info[$row]['name_chat'];
      $chatuser 					= $info[$row]['chat_user'];
      
      echo "<tr>";
      echo "<td>" . $datetime . "</td>";
      echo "<td>" . $namechat . "</td>";
      echo "<td>" . $chatuser . "</td>";
      echo "</tr>";
      
      /*
      $row_chats = explode(': ', $namechat);
      
      foreach($row_chats as $row_chat)
      {
          echo "<td>" . $row_chat . "</td>";
      }
      */
  }
}
?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript" charset="utf8"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js" type="text/javascript" charset="utf8">
        </script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" type="text/javascript" charset="utf8"></script>

        <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js" type="text/javascript" charset="utf8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript" charset="utf8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js" type="text/javascript" charset="utf8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js" type="text/javascript" charset="utf8"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js" type="text/javascript" charset="utf8"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js" type="text/javascript" charset="utf8"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
        <script src="js/script.js"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('#tableparsing').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5',
                    'print'
                ]
            });
        });

        function eraseText() {
            document.getElementById("masukan").value = "";
        }

        function selectElementContents(el) {
            var body = document.body,
                range, sel;
            if (document.createRange && window.getSelection) {
                range = document.createRange();
                sel = window.getSelection();
                sel.removeAllRanges();
                try {
                    range.selectNodeContents(el);
                    sel.addRange(range);
                } catch (e) {
                    range.selectNode(el);
                    sel.addRange(range);
                }
            } else if (body.createTextRange) {
                range = body.createTextRange();
                range.moveToElementText(el);
                range.select();
            }
        }
        </script>
</body>

</html>