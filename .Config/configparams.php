<?php
/**
 * @copyright: Jatékbirodalom Kft.
 * @author: Vivi
 * @version: 1.0.1
 * @update: 2022.04.25.
 */

$project_root_folder = "/";
$domain = "http://" . $_SERVER["HTTP_HOST"] . $project_root_folder;

return [
    "DOMAIN" => $domain,
    "CONTROLLER" => $domain . "Controller/",
    "VIEW" => $domain . "View/",
    "ASSETS" => $domain . "Web/Assets/",
    "CSS" => $project_root_folder . "Web/Css/",
    "JS" => $project_root_folder . "Web/Js/",

    "MENUBAR" => $_SERVER["DOCUMENT_ROOT"] . $project_root_folder . "/View/menubar.php",
    "FOOTER" => $_SERVER["DOCUMENT_ROOT"] . $project_root_folder . "/View/footer.php",
]

?>
