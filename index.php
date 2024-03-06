<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario</title>
</head>

<body>

    <form action="procesamiento.php" method="POST">

        <label for="evento">Tipo de evento:</label>
        <select name="evento" id="evento">
            <option value="Despedida de soltera/o" selected>Despedida de soltera/o</option>
            <option value="Monólogo en bod">Monólogo en boda</option>
            <option value="Maestro de ceremonias">Maestro de ceremonias</option>
            <option value="Cumpleaños">Cumpleaños</option>
            <option value="Otro: (especificar)">Otro: (especificar)</option>
        </select>
        <input type="text" id="evento_otro" name="evento_otro" style="display: none;">

        <div class="fecha_hora">
            <div class="fecha">
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha" name="fecha">
            </div>

            <div class="hora">
                <label for="hora">Hora:</label>
                <input type="time" id="hora" name="hora">
            </div>

        </div>

        <label for="lugar">Lugar exacto donde se realizará el evento. Si añades un enlace de GoogleMaps, me harás muy
            feliz:</label>
        <input type="text" name="lugar" id="lugar">

        <label for="nombre_contacto">Nombre (persona de contacto):</label>
        <input type="text" name="nombre_contacto" id="nombre_contacto">

        <label for="telefono">Teléfono (persona de contacto):</label>
        <input type="tel" name="telefono" id="telefono">

        <label for="email">Email (persona de contacto):</label>
        <input type="email" name="email" id="email">

        <label for="asistentes">Número aproximado de asistentes:</label>
        <input type="number" id="asistentes" name="asistentes" min="1">

        <label for="nombre_completo">NOMBRE COMPLETO del/de la/de los protagonista/s:</label>
        <input type="text" name="nombre_completo" id="nombre_completo">

        <label for="donde_es">¿DE DÓNDE ES?</label>
        <input type="text" name="donde_es" id="donde_es">

        <label for="actividad_principal">ACTIVIDAD PRINCIPAL. Trabajo actual y otras actividades relevantes:</label>
        <textarea name="actividad_principal" id="actividad_principal"></textarea>

        <label for="aficiones">AFICIONES: "(...) ¿A qué dedica el tiempo libreee? (...)" ¿Aficiones raras?
            ¡Escríbelas aquí!
        </label>
        <textarea name="aficiones" id="aficiones"></textarea>

        <label for="anecdotas">ANÉCDOTAS Y MANÍAS relacionadas tanto con el/la protagonista como con los
            invitados:</label>
        <textarea name="anecdotas" id="anecdotas"></textarea>

        <label for="tabu">TEMAS TABÚ: Cuestiones peliagudas que sería mejor no tratar para evitar
            situaciones incómodas. Si no existe límite, escribe "ninguno":*</label>
        <textarea name="tabu" id="tabu"></textarea>

        <label for="informacion_adicional">INFORMACIÓN ADICIONAL: Si quieres comentarme algo más, no relacionado
            con lo visto hasta ahora, puedes hacerlo aquí:</label>
        <textarea name="informacion_adicional" id="informacion_adicional"></textarea>


        <label>Rango de edades:</label>
        <div class="checkbox">
            <div class="checkbox_hijo">
                <label for="rango1">Niños (0-13 años)
                </label>
                <input type="checkbox" id="rango1" name="rango_edades[]" value="niños">
            </div>
            <div class="checkbox_hijo"><label for="rango2">Adolescentes (14-17 años)
                </label>
                <input type="checkbox" id="rango2" name="rango_edades[]" value="adolescentes">
            </div>
            <div class="checkbox_hijo"><label for="rango3">Jóvenes (18-29 años)
                </label>
                <input type="checkbox" id="rango3" name="rango_edades[]" value="jovenes">
            </div>
            <div class="checkbox_hijo"><label for="rango4">Adultos (30-59 años)
                </label>
                <input type="checkbox" id="rango4" name="rango_edades[]" value="adultos">
            </div>
            <div class="checkbox_hijo"><label for="rango5">Senior (de 60 en adelante)
                </label>
                <input type="checkbox" id="rango5" name="rango_edades[]" value="senior">
            </div>
        </div>

        <label>Nivel de sorpresa:</label>
        <div class="checkbox">
            <div class="checkbox_hijo">
                <label for="sorpresa1">Sólo yo (la persona de contacto)
                </label>
                <input type="checkbox" id="sorpresa1" name="nivel_sorpresa[]" value="soloYo">
            </div>
            <div class="checkbox_hijo">
                <label for="sorpresa2">Yo (la persona de contacto) y algunos invitados
                </label>
                <input type="checkbox" id="sorpresa2" name="nivel_sorpresa[]" value="yoAlgunosInvitados">
            </div>
            <div class="checkbox_hijo">
                <label for="sorpresa3">Yo (la persona de contacto) y todos los invitados
                </label>
                <input type="checkbox" id="sorpresa3" name="nivel_sorpresa[]" value="yoTodosInvitados">
            </div>
            <div class="checkbox_hijo">
                <label for="sorpresa4">Todos/as (incluido el/la protagonista)
                </label>
                <input type="checkbox" id="sorpresa4" name="nivel_sorpresa[]" value="todos">
            </div>
        </div>

        <input type="submit" value="Enviar">

        <p>Por favor, envía este formulario rellenado a <a
                href="mailto:info@comicoalicante.com">test</a> .
        </p>
        <p>Si necesitas enviar algún audio, hazlo al teléfono <a href="tel:">test</a>
            ¡Gracias!
        </p>

    </form>

    <script>
        document.getElementById("evento").addEventListener("change", mostrarOtro);

        function mostrarOtro() {
            const selectEvento = document.getElementById("evento").value;
            const selectOtro = document.getElementById("evento_otro");
            if (selectEvento === "Otro: (especificar)") {
                selectOtro.style.display = "block";
            } else {
                selectOtro.style.display = "none";
            }
        }
    </script>

</body>

</html>