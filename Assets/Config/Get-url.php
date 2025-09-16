  <?php
    function getURL()
    {
        $currentPath = trim($_SERVER['REQUEST_URI'], '/');
        $segments = explode('/', $currentPath);
        $currentPage = end($segments);

        // Si solo es "Portafolio", asumimos que es Home
        if ($currentPage === "Portafolio" || $currentPage === "") {
            $currentPage = "Home";
        }

        return $currentPage;
    }
    ?>