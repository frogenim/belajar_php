<html>
    <head>
        <title>Penanganan Form ~ Listbox</title>
    </head>
    <body>
        <form  method="post" action="Proses_ListBox.php">
        pilih warna :<br>
            <select name='color[]' size=6 multiple>
                <option value='blue'>Blue</option>
                <option value='green'>Green</option>
                <option value='red'>Red</option>
                <option value='yellow'>Yellow</option>
                <option value='white'>White</option>
            </select> <br>
        <input type="submit">
        </form>
    </body>
</html>