import './bootstrap';

import Alpine from 'alpinejs';
import flatpickr from 'flatpickr';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', function () {
    flatpickr('.datepicker', {
        enableTime: true,
        dateFormat: 'Y-m-d H:i:S',
        altInput: true,
        altFormat: 'd/m/Y H:i',
        locale: { firstDayOfWeek: 1 },
    });
});
