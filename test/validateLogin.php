<form id="myForm">
    <input type="text" name="username" id="username" placeholder="Введите имя пользователя">
    <span id="usernameError"></span>
    <input type="password" name="password" id="password" placeholder="Введите пароль">
    <span id="passwordError"></span>
    <input type="submit" value="Отправить">
</form>
<script>
 document.getElementById("myForm").addEventListener("submit", function(event) {
     event.preventDefault();
     var username = document.getElementById("username").value;
     var password = document.getElementById("password").value;

     var xhr = new XMLHttpRequest();
     xhr.open("POST", "validate.php", true);
     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     xhr.onreadystatechange = function() {
         if (xhr.readyState === 4 && xhr.status === 200){
             var response = JSON.parse(xhr.responseText);
             if (response.usernameError){
                 document.getElementById("usernameError").innerHTML = response.usernameError;
             }else {
                 document.getElementById("usernameError").innerHTML = "";
             }
             if (response.passwordError){
                 document.getElementById("passwordError").innerHTML = response.passwordError;
             }else {
                 document.getElementById("passwordError").innerHTML = "";
             }
         }
     };
     xhr.send("username=" + username + "&password=" + password);
});
</script>