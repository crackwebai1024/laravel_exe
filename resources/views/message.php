<html>
   <head>
      <title>Ajax Example</title>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js?v=1.0.4"></script>

      <script>
         function getMessage(val) {
            console.log("we call function");
            let token = val.toString();
            let formdata = new FormData();
            formdata.append("_token", token);
            $.post(
               'http://127.0.0.1:8000/getmsg',
               $("#ss").serialize(),
               function(data) {
                    debugger;
                    console.log("arrived data", data);
                    $("#msg").html = "";
               }
            );
         }
        </script>
    </head>

    <body>
        <div id = 'msg'>This message will be replaced using Ajax.
            Click the button to replace the message.</div>
        <form id="ss" action="/getmsg" method="post">
            <input name="_token" value="<?php echo csrf_token() ?>"/>
            <input type="submit" value="submit"/>
        </form>
        <button onclick="getMessage('<?php echo csrf_token() ?>')">Replace Message</button>
    </body>

</html>
