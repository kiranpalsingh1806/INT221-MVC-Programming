<h1>Addition of two numbers </h1>
<form action="/users" method="post">
    @csrf
    <label for="num1">Enter first number:</label>
    <input type="number" name="num1" id="num1" value=""/> <br> <br>
    <label for="num2">Enter second number:</label>
    <input type="number" name="num2" id="num1" value=""/> <br> <br>
    <button type="submit"> Add</button>
</form>