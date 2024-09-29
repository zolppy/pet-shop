<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Encontre tudo o que seu pet precisa em nosso pet shop online! Oferecemos produtos de qualidade, como rações, brinquedos, acessórios e mais, com entrega rápida e preços acessíveis."
    />
    <meta
      name="keywords"
      content="Pet shop, produtos para pets, ração, acessórios para pets, brinquedos para animais, cuidados com animais, pet shop online, entrega rápida, loja de animais"
    />
    <meta name="author" content="Gabriel Cavalcante e Rulian Cruz" />
    <title>Pet Shop</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {},
        },
        corePlugins: {
          preflight: true,
        },
      };
    </script>
  </head>
  <body class="bg-[#1E1E2C] text-[#E0E0E0]">
    <?php
      include_once "view/components/header.php";

      error_reporting(E_ALL);
      ini_set('display_errors', true);

      spl_autoload_register(function ($class)
      {
        if(file_exists("controller/$class.php"))
        {
          return require_once "controller/$class.php";
          return true;
        }
      });

      if ($_GET) {
        $controllerName = isset($_GET['controller']) ? $_GET['controller'] : null;
        $method = isset($_GET['method']) ? $_GET['method'] : 'index';
    
        if ($controllerName && class_exists($controllerName))
        {
          $controller = new $controllerName();

          if (method_exists($controller, $method))
          {
            $parameters = $_GET;
            unset($parameters['controller']);
            unset($parameters['method']);
            call_user_func([$controller, $method], $parameters);
          }
          else
          {
            echo "Método não encontrado";
          }
        }
        else
        {
          echo "Controller não encontrado";
        }
      }
      else
      {
        include_once "view/home.php";
      }

      include_once "view/components/footer.php";
    ?>
  </body>
</html>