<!DOCTYPE html>
<html>
<style>
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
<body>

<h3>
    Login Form
</h3>

<div>
    <form action="/users/login" method="post">
        @csrf
        <label>Full name</label>
        <input type="text" name="fullName" placeholder="Full name..">

        <label>Email</label>
        <input type="text" name="email" placeholder="Email..">

        <label>Phone</label>
        <input type="text" name="phone" placeholder="Phone..">

        <label>Address</label>
        <input type="text" name="address" placeholder="Address..">

        <label>Identity Card</label>
        <input type="text" name="identityCard" placeholder="Identity Card..">

        <input type="submit" value="Submitt">
    </form>
</div>

</body>
</html>
<?php
