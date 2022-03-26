<h1>Send Mail from Laravel </h1>
<form action="/sendmessage" method="post">
    @csrf
    <label for="fromMail">From Mail ID:</label>
    <input type="text" name="fromMail" id="fromMail" value=""/> <br> <br>
<<<<<<< HEAD
    <label for="toMail">To Mail ID:</label>
=======
    <label for="toMail">To Email ID:</label>
>>>>>>> 080bc57d7e6ed3696f7b9b53718a6ff1f5aba2cf
    <input type="text" name="toMail" id="toMail" value=""/> <br> <br>
    <label for="message">Enter your message:</label>
    <input type="text" name="message" id="message" value=""/> <br> <br>
    <button type="submit"> Send mail</button>
</form>
