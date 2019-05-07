$(document).ready(function () {
    if (!document.getElementById('anmeldeformular-14')) {
        return;
    }
    var $span = $('#anmeldeformular-14 .custom-control.custom-checkbox label > span');
    $span.html('Bitte beachten Sie vor Ihrer Anmeldung über das Anmeldeformular unbedingt unsere <a href="/besondere-hinweise" target="_blank">Besonderen Hinweise</a>, unsere <a target="_blank" href="/anmeldung/preisliste" target="_blank">Preisliste</a>, unsere <a href="/anmeldung/hausordnung" target="_blank">Hausordnung</a> und unseren <a href="/anmeldung/belegungsplan" target="_blank">Belegungsplan</a>. <span class="required">*</span>')
});
