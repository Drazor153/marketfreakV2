<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MarketFreak</title>
</head>
<body>
    <?php include("header.php");?>
</body>
</html>
<script>
    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
            c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
            }
        }
        return "";
        }
    let bod = document.body
    let theme = getCookie("theme")
    switch (theme) {
        case "dark":
            bod.className = "dark-mode-s"
            document.getElementById("slider-theme").checked = true
            break;
        case "light":
            bod.className = "light-mode-s"
            document.getElementById("slider-theme").checked = false
            break;
        default:
            break;
    }
</script>