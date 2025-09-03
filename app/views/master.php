<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->e($title) ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
      input[type=text], input[type=email], input[type=tel], textarea{
        @apply border border-solid border-black rounded-lg px-3 py-1 
      }

      input[type=submit]{
        @apply bg-[#9562f3] px-5 py-1 text-black rounded-lg
      }
    </style>
</head>

<body class="bg-[#e9e9e9] h-screen px-5">
    <header class="container mx-auto rounded-full mt-10 flex bg-white justify-center py-5">
        <nav>
            <h1 class="text-3xl font-bold text-center">My Github Repositories</h1>
        </nav>
    </header>
    <main class="container bg-white rounded-xl p-10 mt-20 mx-auto">
        <?= $this->section('content') ?>
    </main>
</body>

</html>