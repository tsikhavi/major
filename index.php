<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link href="/dist/output.css" rel="stylesheet">
  <title>Your Landing Page</title>
</head>

<body class="bg-gray-200">
  <header class="bg-white shadow">
    <div class="container mx-auto px-4 py-6">
      <nav class="flex items-center justify-between">
        <a class="text-xl font-semibold" href="#">Your Brand</a>
        <ul class="flex space-x-4">
          <li><a class="text-gray-600 hover:text-gray-900" href="#">Features</a></li>
          <li><a class="text-gray-600 hover:text-gray-900" href="#">Pricing</a></li>
          <li><a class="text-gray-600 hover:text-gray-900" href="#">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container mx-auto px-4 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div>
        <h1 class="text-4xl font-bold mb-4">Welcome to Your Landing Page</h1>
        <p class="text-gray-600 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt ligula a
          metus convallis ullamcorper.</p>
        <a class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded" href="#">Get Started</a>
      </div>
      <img class="mx-auto" src="path/to/your/image.jpg" alt="Image">
    </div>
  </main>

  <footer class="bg-gray-200 py-4">
    <div class="container mx-auto px-4">
      <p class="text-center text-gray-600">© 2023 Your Company. All rights reserved.</p>
    </div>
  </footer>
</body>

</html>
