<?php
return "
<form method='post' action='index.php?page=quiz'>
    <h2>Personal Information</h2>
    
    <label>Enter your name:</label>
    <input type='text' name='myname' />
    <br/>
    
    <label>Enter your phone number:</label>
    <input type='text' name='phone' />
    <br/>
    
    <label>Select your level of education:</label>
    <select name='answer'>
        <option value='bachelor'>Bachelor</option>
        <option value='master'>Master</option>
        <option value='phd'>PhD</option>
    </select>
    <br/>
    
    <label>Enter your date of birth:</label>
    <input type='date' name='datebirth' />
    <br/>
    
    <input type='submit' name='quiz-submitted' value='Post' />
</form>";
?>
