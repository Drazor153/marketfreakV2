function changeTheme() {
    var bod = document.body
    var check = document.getElementById("slider-theme")
    var state = check.checked
    state ? bod.className = "dark-mode" : bod.className = "light-mode"
}