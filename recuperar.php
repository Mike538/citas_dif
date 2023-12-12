
<?php
require_once __DIR__ . '/vendor/autoload.php'; // Ruta al archivo autoload.php de Mailjet

use \Mailjet\Resources;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // credenciales cliente de Mailjet
    $mj = new \Mailjet\Client('710f3b97a3f8151766b607b091d84814', '27c4e61eb84c01eefd87d69edc565620', true, ['version' => 'v3.1']);

    // Configurar los datos para enviar la plantilla de Mailjet
    $body = [
        'Messages' => [
            [
                'From' => [
                    'Email' => "mikedarknessuwu@gmail.com",
                    'Name' => "Devmike"
                ],
                'To' => [
                    [
                        'Email' => $email,
                        'Name' => "Usuario"
                    ]
                ],
                'TemplateID' => 5388492, // ID de tu plantilla en Mailjet
                'TemplateLanguage' => true,
                'Subject' => "Restablecer contraseña",
                'Variables' => [
                    // Puedes agregar las variables y sus valores según tu plantilla en Mailjet
                    'nombre_variable' => 'valor_variable',
                    // ...agrega más variables si es necesario
                ]
            ]
        ]
    ];

    try {
        // Enviar el correo utilizando la plantilla de Mailjet
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        echo 'Se ha enviado el correo correctamente.';
    } catch (\Exception $e) {
        echo 'El mensaje no pudo ser enviado. Error: ', $e->getMessage();
    }
}
?>
