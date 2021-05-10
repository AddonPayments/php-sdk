<a href="https://desarrolladores.addonpayments.com/" target="_blank">
    <img src="https://desarrolladores.addonpayments.com/assets/images/branding/comercia/logo.svg?v=?v=1.14.1" alt="Addon Payments logo" title="Addon Payments" align="right" width="225" />
</a>

# SDK de PHP Comercia Global Payments

Este SDK ha sido adaptado por Comercia Global Payments para facilitar la integración de su terminal Addon Payments en su servidor PHP.

## Soluciones

### General

* Procesamiento de pagos API
* Apple Pay y Google Pay (en desarrollo)
* Almacenamiento seguro de tarjetas y gestión de clientes
* Pagos recurrentes
* Crédito y Débito
* Minimizar los requisitos de cumplimiento de PCI con las soluciones de HPP
* 140+ Monedas de autorización y 16 Monedas de liquidación
* Normas incorporadas para la prevención del fraude
* Comprobaciones 3D Secure, AVS y CVV
* Cifrado seguro de extremo a extremo
* Compatible con la versión 2 de 3D Secure

## Requisitos

- PHP 5.5.9+
- OpenSSL 1.0.1+
- PHP Curl extension
- PHP DOM extension
- PHP OpenSSL extension

## Instalación

La instalación del SDK en su solución se realiza normalmente utilizando Composer/Packagist, o añadiendo el proyecto a su solución y haciendo referencia a él directamente.

Para instalar vía [Composer/Packagist](https://packagist.org/packages/addonpayments/php-sdk), debe introducir los siguientes comandos en su consola:

```
composer require addonpayments/php-sdk
```

Para instalar a través de una descarga directa:

Puede descargar y descomprimir la librería, o usando Git puede [clonar el repositorio](https://github.com/addonpayments/php-sdk) desde GitHub.

```
git clone https://github.com/addonpayments/php-sdk
```
*Ver más sobre [cómo clonar repositorios](https://help.github.com/articles/cloning-a-repository/).*

## Documentación y ejemplos

Puede encontrar una documentación adaptada a cada operativa de pago, ejecutando el archivo "index.php" desde su servidor.

La documentación contiene las validaciones del proyecto oficial de [JavaScript](https://github.com/AddonPayments/js-sdk) Addon Payments. También las puede encontrar en la ruta del proyecto "[test/assets/js](https://github.com/AddonPayments/php-sdk/tree/master/test/assets/js)".

Este archivo se encuentra dentro de la carpeta "test" del SDK. Si lo prefiere, también puede ver nuestra documentación oficial en la página web de desarrolladores de [Addon Payments](https://desarrolladores.addonpayments.com) donde encontrará además tarjetas con las que realizar pruebas de compra y el resto de librerías disponibles.

*Consejo rápido*: ¡[El paquete de pruebas incluido](https://github.com/addonpayments/php-sdk/tree/master/test) puede ser una gran fuente de ejemplos de código para usar el SDK!

#### Procesar un pago

```csharp
$card = new CreditCardData();
$card->number = "4111111111111111";
$card->expMonth = "12";
$card->expYear = "2025";
$card->cvn = "123";

try {
    $response = $card->charge(129.99)
        ->withCurrency("EUR")
        ->execute();

    $result = $response->responseCode; // 00 == Autorizado
    $message = $response->responseMessage; // [ sistema de pruebas ] AUTHORISED
} catch (ApiException $e) {
    // Manejar errores
}
```

#### Datos de tarjeta de prueba

Nombre      | Número           | Exp Mes   | Exp Año  | CVN
----------- | ---------------- | --------- | -------- | ----
Visa        | 4263970000005262 | 12        | 2025     | 123
MasterCard  | 2223000010005780 | 12        | 2019     | 900
MasterCard  | 5425230000004415 | 12        | 2025     | 123
Discover    | 6011000000000087 | 12        | 2025     | 123
Amex        | 374101000000608  | 12        | 2025     | 1234
JCB         | 3566000000000000 | 12        | 2025     | 123
Diners Club | 36256000000725   | 12        | 2025     | 123

#### Tarjetas de prueba para 3DS2

Tipo              | Número           | Exp Mes   | Exp Año  | CVN
------------------| ---------------- | --------- | -------- | ----
Frictionless      | 4263970000005262 | 12        | 2025     | 123
Challenge Required| 4012001038488884 | 12        | 2025     | 123

#### Excepciones

Durante su integración usted podrá probar las respuestas específicas del emisor tales como "Tarjeta Rechazada".

Debido a que nuestros entornos de pruebas no llegan a los bancos emisores para obtener autorizaciones, existen números de tarjeta que activarán las respuestas del banco emisor.

En la documentación de la carpeta "test" podrá encontrar un buscador de errores dinámico donde se muestra una descripción detallada de cada error y su posible solución.

Póngase en contacto con el equipo de soporte de Addon Payments para obtener una lista completa de los valores utilizados y simular los resultados de la transacción AVS/CVV.

Ejemplo de código de manejo de errores:

```php
try {
    $response = $card->charge(129.99)
        ->withCurrency("EUR")
        ->execute();
} catch (BuilderException $e) {
    // Errores del constructor
} catch (ConfigurationException $e) {
    // Errores referentes a la configuración de los servicios
} catch (GatewayException $e) {
    // Errores/excepciones de la pasarela de pagos
} catch (UnsupportedTransactionException $e) {
    // Manejar errores cuando la pasarela de pagos no soporta el tipo de transacción
} catch (ApiException $e) {
    // Manejar otros errores
}
```

## Soporte

En caso de que quiera hablar con un especialista de Addon Payments, deberá llamar al teléfono [914 353 028](tel:914353028) o enviar un email a [soporte@addonpayments.com](mailto:soporte@addonpayments.com).

## Contribuyendo

¡Todo nuestro código es de código abierto y animamos a otros desarrolladores a contribuir y ayudar a mejorarlo!

1. Fork it
2. Cree su rama de características (`git checkout -b mi-nueva-feature`)
3. Asegúrese de que las pruebas de SDK son correctas
4. Confirme sus cambios (`git commit -am 'Añadir un commit'`)
5. Empujar a la rama (`git push origin mi-nueva-feature`)
6. Crear una nueva solicitud de extracción

## Licencia

Este proyecto está licenciado bajo la GNU General Public License v2.0. Consulte el archivo ["LICENSE.md"](LICENSE.md) ubicado en la raíz del proyecto para obtener más detalles.
