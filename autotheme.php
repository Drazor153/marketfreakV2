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
            document.getElementById("toggle").checked = true
            break;
        case "light":
            bod.className = "light-mode-s"
            document.getElementById("toggle").checked = false
            break;
        default:
            break;
    }
</script>