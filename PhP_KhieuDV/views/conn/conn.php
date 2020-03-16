<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content=''>
    <meta name="author" content=''>
    <title>PHP Classes Generator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="class-generator.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <form action="index.php?controllers=conn&action=create" method="post">
        <h1 class="form-classGenerator-heading">Create Your Connection!</h1>

        <div class="form-classGenerator-input">
            <label for="dbType" class="sr-only">Database Type</label>
            <select class="form-control" placeholder="Database Type" name="type" id="type">
                <option value="mysql" >MySQL</option>
            </select>
            <label for="inputHost" class="sr-only">Host</label>
            <input class="form-control" placeholder="Host*" type="text" id="host" name="host" >
            <label for="inputDatabase" class="sr-only">Database</label>
            <input class="form-control" placeholder="Database*" type="text" id="database" name="database" >
            <label for="inputUserName" class="sr-only">User name</label>
            <input class="form-control" placeholder="User name*" type="text" id="username" name="username">
            <label for="inputPassword" class="sr-only">User password</label>
            <input class="form-control" placeholder="User password" type="password" id="password" name="password">
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="insert_conn" id="insert_conn">Submit</button>
        </div>
    </form>
</div>


</body>

</html>
