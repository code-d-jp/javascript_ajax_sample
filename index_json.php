<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ajax Demo</title>
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>
    <script>
      $(function() {
        $("#myBtn").click(function() {
          // console.log("Hello World");
          $.post("/entry_json.php", {mail: $("#mail").val()}, null, "json")
            .done(function(resp) {
              console.log(resp.type);
              console.log(resp.message);
              $("div").text(resp.message);
            }).fail(function(resp) {
              console.log("fail");
              console.log(resp);
            });
        });
      });
    </script>
    </head>
  <body>
    <h1>Ajax Demo</h1>
    <form action="entry.php" method="post">
      <input type="text" id="mail" name="mail" value="">
      <input type="submit" value="submit">
      <input type="button" id="myBtn" value="ajax">
    </form>
    <div>Result</div>
  </body>
</html>
