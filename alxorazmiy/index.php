<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <div class="container-fluid">
       <h1>Time of prayers!</h1>
       <div class="container">
           <form method="get" action="api-back.php">

               <p>
                   <label>Select your city</label>
               </p>
           <select>
               <option value="New_York">New_York</option>
               <option value="Los_Angeles">Los_Angeles</option>
               <option value="Chicago">Chicago</option>
               <option value="Columbus">Columbus</option>
           </select>
               <button>submit</button>
           </form>

       </div>

   </div>
<style>
    h1{
        text-align: center;
        color: lightseagreen;
        font-family:"Times New Roman";
    }



</style>

</body>
</html>

