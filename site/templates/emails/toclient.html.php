<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Κράτηση - <?= $page->parent()->subtitle() ?> - <?= $page->parent()->title() ?></title>
    <style>
      /* -------------------------------------
          GLOBAL RESETS
      ------------------------------------- */

      /*All the styling goes here*/

      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%;
      }

      body {
        background-color: #f6f6f6;
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
      }

      table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top;
      }

      /* -------------------------------------
          BODY & CONTAINER
      ------------------------------------- */

      .body {
        background-color: #f6f6f6;
        width: 100%;
      }

      /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
      .container {
        display: block;
        Margin: 0 auto !important;
        /* makes it centered */
        max-width: 580px;
        padding: 10px;
        width: 580px;
      }

      /* This should also be a block element, so that it will fill 100% of the .container */
      .content {
        box-sizing: border-box;
        display: block;
        Margin: 0 auto;
        max-width: 580px;
        padding: 10px;
      }

      /* -------------------------------------
          HEADER, FOOTER, MAIN
      ------------------------------------- */
      .main {
        background: #ffffff;
        border-radius: 3px;
        width: 100%;
      }

      .wrapper {
        box-sizing: border-box;
        padding: 20px;
      }

      .content-block {
        padding-bottom: 10px;
        padding-top: 10px;
      }

      .footer {
        clear: both;
        Margin-top: 10px;
        text-align: center;
        width: 100%;
      }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color: #999999;
          font-size: 12px;
          text-align: center;
      }

      /* -------------------------------------
          TYPOGRAPHY
      ------------------------------------- */
      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: bold;
        line-height: 1.4;
        margin: 0;
        margin-bottom: 15px;
        margin-top:30px;
      }

      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize;
      }

      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        margin-bottom: 15px;
      }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px;
      }

      a {
        color: #3498db;
        text-decoration: underline;
      }

      /* -------------------------------------
          BUTTONS
      ------------------------------------- */
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto;
      }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          text-align: center;
      }
        .btn a {
          background-color: #ffffff;
          border: solid 1px #3498db;
          border-radius: 5px;
          box-sizing: border-box;
          color: #3498db;
          cursor: pointer;
          display: inline-block;
          font-size: 14px;
          font-weight: bold;
          margin: 0;
          padding: 12px 25px;
          text-decoration: none;
          text-transform: capitalize;
      }

      .btn-primary table td {
        background-color: #3498db;
      }

      .btn-primary a {
        background-color: #3498db;
        border-color: #3498db;
        color: #ffffff;
      }

      /* -------------------------------------
          OTHER STYLES THAT MIGHT BE USEFUL
      ------------------------------------- */
      .last {
        margin-bottom: 0;
      }

      .first {
        margin-top: 0;
      }

      .align-center {
        text-align: center;
      }

      .align-right {
        text-align: right;
      }

      .align-left {
        text-align: left;
      }

      .clear {
        clear: both;
      }

      .mt0 {
        margin-top: 0;
      }

      .mb0 {
        margin-bottom: 0;
      }
      .mb15 {
        margin-bottom:15px;
      }

      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0;
      }

      .powered-by a {
        text-decoration: none;
      }

      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        Margin: 20px 0;
      }

      .bold {
          font-weight: bold;
      }

      /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
      ------------------------------------- */
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important;
        }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important;
        }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important;
        }
        table[class=body] .content {
          padding: 0 !important;
        }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important;
        }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important;
        }
        table[class=body] .btn table {
          width: 100% !important;
        }
        table[class=body] .btn a {
          width: 100% !important;
        }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important;
        }
      }

      /* -------------------------------------
          PRESERVE THESE STYLES IN THE HEAD
      ------------------------------------- */
      @media all {
        .ExternalClass {
          width: 100%;
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%;
        }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important;
        }
        .btn-primary table td:hover {
          background-color: #34495e !important;
        }
        .btn-primary a:hover {
          background-color: #34495e !important;
          border-color: #34495e !important;
        }
      }

    </style>
  </head>
  <body class="">
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">

            <!-- START CENTERED WHITE CONTAINER -->
            <!-- <span class="preheader">This is preheader text. Some clients will show this text as a preview.</span> -->
            <table role="presentation" class="main">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper">
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
                        <p>Αγαπητοί γονείς,</p>
                        <p>ευχαριστούμε πολύ που γραφτήκατε σε μία από τις ξεναγήσεις μας!</p>
                        <p>Για να ολοκληρωθεί η κράτησή σας πρέπει <span class="bold">εντός 5 ημερών</span> να προχωρήσετε στην εξόφληση των θέσεων που δηλώσατε ή <span class="bold">άμεσα</span> αναλόγως του πότε συμπληρώσατε την φόρμα κράτησης.</p>
                        <p>Θα μας βοηθούσατε πολύ αν διαβάζατε προσεκτικά και τηρούσατε τις προτεινόμενες οδηγίες.</p>
                        <p>Βρείτε παρακάτω τα στοιχεία που δηλώσατε, τους τρόπους εξόφλησης και τις πληροφορίες του ραντεβού μας.</p>
                        <h4>ΠΡΟΣΟΧΗ!</h4>
                        <p>Επειδή τα groups είναι ολιγομελή παρακαλούμε μην κρατάτε θέσεις ασκόπως αν δεν έχετε την πρόθεση να εξοφλήσετε εγκαίρως και να παρακολουθήσετε την ξενάγηση. Κάποια άλλα παιδάκια μπορεί να είναι στην λίστα αναμονής και να περιμένουν!</p>
                        <p>Θα χαρούμε πολύ να σας δούμε κι από κοντά!</p>

                        <h2 class="align-center">ΣΤΟΙΧΕΙΑ ΚΡΑΤΗΣΗΣ</h2>

                        <p><span class="bold">Ξενάγηση:</span> <?= $page->tour()->toPage()->title() ?></p>
                        <p><span class="bold">Ημερομηνία:</span> <?= $page->format_date() ?></p>
                        <p><span class="bold">Ώρα:</span> <?= $page->time() ?></p>
                        <p><span class="bold">Όνομα:</span> <?= $data['first_name']; ?></p>
                        <p><span class="bold">Επώνυμο:</span> <?= $data['last_name']; ?></p>
                        <p><span class="bold">Διεύθυνση:</span> <?= $data['address']; ?></p>
                        <p><span class="bold">Πόλη:</span> <?= $data['city']; ?></p>
                        <p><span class="bold">Τηλέφωνο:</span> <?= $data['phone']; ?></p>
                        <p><span class="bold">Email:</span> <?= $data['email']; ?></p>
                        <p><span class="bold">Ονόματα παιδιών:</span> </p>
                        <p><?= $data['children_names']; ?></p>
                        <p><span class="bold">Αριθμός ενηλίκων:</span> <?= $data['adult_number']; ?></p>
                        <p><span class="bold">Αριθμός παιδιών:</span> <?= $data['children_number']; ?></p>
                        <p><span class="bold">Μήνυμα:</span> <?=  $data['client_message']; ?></p>

                        <h2 class="align-center">ΠΛΗΡΟΦΟΡΙΕΣ</h2>

                        <h3>ΚΟΣΤΟΣ ΞΕΝΑΓΗΣΗΣ:</h3>
                        <p>Ενήλικες 6€ & Παιδιά 6€</p>

                        <h3>ΕΙΣΟΔΟΣ ΣΤΟΝ ΑΡΧΑΙΟΛΟΓΙΚΟ ΧΩΡΟ/ΜΟΥΣΕΙΟ:</h3>
                        <p>Η είσοδος στον αρχαιολογικό χώρο/μουσείο δεν περιλαμβάνεται στην τιμή ξενάγησης. Το κόστος εισόδου αφορά μόνον τους ενήλικες και θα πληρωθεί την ημέρα της ξενάγησης στο ταμείο έκαστου χώρου.</p>

                        <h3>ΟΛΟΚΛΗΡΩΣΗ ΚΡΑΤΗΣΗΣ:</h3>
                        <p>Ολοκληρωμένη και επικυρωμένη θεωρείται μια κράτηση όταν έχει εξοφληθεί το συνολικό της κόστος.</p>
                        <p>Η εξόφληση πρέπει να γίνεται εγκαίρως έως και 5 ημέρες από την ημερομηνία της κράτησης ή άμεσα αναλόγως πότε συμπληρώσατε την φόρμα κράτησης. Σε αντίθετη περίπτωση οι θέσεις που κρατήσατε θα ακυρώνονται.</p>

                        <h3>ΚΑΤΑΘΕΣΗ:</h3>
                        <p>Παρακαλώ καταθέστε μόνον το συνολικό κόστος ξενάγησης που αφορά στις συμμετοχές που δηλώσατε χωρίς το κόστος εισόδου στο μουσείο/αρχαιολογικό χώρο (όπου αυτό ισχύει).</p>

                        <h3>ΤΡΟΠΟΙ ΕΞΟΦΛΗΣΗΣ:</h3>

                        <p>1. Με κατάθεση στην Τράπεζα ΠΕΙΡΑΙΩΣ (Δεν απαιτείται να ειδοποιήσετε την εταιρία. Ενημερωνόμαστε άμεσα.)</p>
                        <p>ΙΒΑΝ: GR52 0172 0260 0050 2608 3001 574</p>
                        <p>Δικαιούχος: ΚΥΡΙΑΚΑΤΙΚΕΣ ΒΟΛΤΕΣ ΣΤΗΝ ΠΟΛΗ ΑμΚΕ</p>

                        <p>2.	Με έμβασμα από άλλη τράπεζα (Απαιτείται να μας ενημερώσετε με email για την κατάθεσή σας.)</p>
                        <p>(Προσοχή! Τα τραπεζικά έξοδα βαρύνουν εξ’ ολοκλήρου τον καταθέτη. Επιλογή OUR.)</p>

                        <p>3.	 Με PAYPAL:</p>
                        <p>https://www.paypal.me/kyriakatikesvoltesgr (Δεν απαιτείται να ειδοποιήσετε την εταιρία. Ενημερωνόμαστε άμεσα.)</p>

                        <p>*Κατά την εξόφληση δηλώστε το ίδιο όνομα γονέα/συνοδού με το οποίο κάνατε κράτηση.</p>

                        <h3>ΠΛΗΡΟΦΟΡΙΕΣ ΡΑΝΤΕΒΟΥ:</h3>
                        <p>Βρείτε εδώ τις πληροφορίες του ραντεβού μας:<p>

                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                          <tbody>
                            <tr>
                              <td align="left">
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td> <a href="<?= $page->parent()->url() ?>/tourinfo" target="_blank">πληροφορίες ραντεβού</a> </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>

                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>

            <!-- START FOOTER -->
            <div class="footer">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="content-block">
                    <br>Do Not Reply to this E-mail
                    <br>Παρακαλούμε μην απαντάτε σε αυτό το μήνυμα μέσω e-mail.
                    <br>Αυτή η διεύθυνση είναι αυτοματοποιημένη, χωρίς επιτήρηση και δεν μπορεί να βοηθήσει με ερωτήσεις ή αιτήματα.
                    <br>Αν θέλετε να μας γράψατε παρακαλώ χρησιμοποιήστε αυτήν την διεύθυνση: info@voltes.city.
                  </td>
                </tr>
                <tr>
                  <td class="content-block">
                  Βόλτες στην πόλη
                  <br>Ξεναγήσεις σε μουσεία & αρχαιολογικούς χώρους για Παιδιά - Σχολεία - Ενήλικες.
                  <br>Tel: 690.729.0084
                  <br>Email: info@voltes.city
                  <br>Website: www.voltes.city
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->

          <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
