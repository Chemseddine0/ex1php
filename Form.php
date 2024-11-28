<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- flowbite tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">

    <title>Document</title>
</head>

<body>
    <?php
    include("./components/Navbar.php");

    ?>


    <div class="div">

    </div>

    <div class="mx">
        <form class="max-w-sm mx-5" method="post">



            <div class="text">
                <h2 class="text-4xl font-extrabold dark:text-white">Veuillez-vous insérer le formulaire</h2>

            </div>



            <div class="mb-5">
                <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Entrez Nom </label>
                <input type="text" name="nom" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Entrez le Nom" required />
            </div>
            <div class="mb-5">
                <label for="prenom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Entrez Prenom </label>
                <input type="text" name="prenom" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Entrez le Prenom" required />
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Entrez Email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required />
            </div>

            <div class="mb-5">
                <label for="comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comment</label>
                <input type="text" name="comment" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="votre avis" required>
            </div>


            <fieldset>

                <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Gender :</h3>


                <div class="flex items-center mb-4 ">
                    <input id="country-option-2" type="radio" name="gender" value="female" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                    <label for="country-option-2" class="block ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Female
                    </label>
                </div>
                <div class="flex items-center mb-4 ">
                    <input id="country-option-2" type="radio" name="gender" value="Male" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                    <label for="country-option-2" class="block ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Male
                    </label>
                </div>
            </fieldset>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>
     <!-- list -->
    <div class="list">
      
        







       
     
           
            <div class="div2">
                <h2 class="text-3xl font-extrabold dark:text-white">La list des </h2>

            </div>





            <script src="../path/to/flowbite/dist/flowbite.min.js"></script>

            <?php
            // define variables and set to empty values
            $nom = $email = $gender = $comment = $prenom = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nom = test_input($_POST["nom"]);
                $prenom = test_input($_POST["prenom"]);
                $email = test_input($_POST["email"]);
                $comment = test_input($_POST["comment"]);
                $gender = test_input($_POST["gender"]);
            }
            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            // echo "<h2>Your Input:</h2>";
            // echo $nom;
            // echo "<br>";
            // echo $prenom;
            // echo "<br>";
            // echo $email;
            // echo "<br>";
            // echo $comment;
            // echo "<br>";
            // echo $gender;

            echo "
<div class='relative '>
    <table class='w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400'>
        <thead class='text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'>
            <tr>
                <th scope='col' class='px-6 py-3'>
                Nom
                </th>
                <th scope='col' class='px-6 py-3'>
                    Prenom
                </th>
                <th scope='col' class='px-6 py-3'>
                Email
                </th>
                  <th scope='col' class='px-6 py-3'>
                Comment 
                </th>
                <th scope='col' class='px-6 py-3'>
                Gender 
                </th>
            </tr>
        </thead>
        <tbody>";
        echo"
            <tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700'>
                <th scope='row' class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white'>
                 $nom 
                </th>
                <td class='px-6 py-4'>
                    $prenom
                </td>
                <td class='px-6 py-4'>
                    $email
                </td>
                <td class='px-6 py-4'>
                    $comment
                </td>
                  <td class='px-6 py-4'>
                    $gender
                </td>
            </tr>
      
       
        </tbody>
    </table>
    ";
            ?>

        

</body>

</html>