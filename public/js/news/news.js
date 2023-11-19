$(function() {
    reloj();
    if ($('#rootwizard').length) {
        // $('#rootwizard').bootstrapWizard();
    }
    submenus();

    $("#ocultar-contenedor").hover(function() {
        $(".ocultar").hide();
    }, function() {
        $(".ocultar").show();
    });
});

function submenus() {
    $('.dropdown-submenu').on("click", function(e) {
        var submenu = $(this);
        $('.dropdown-submenu .dropdown-menu').removeClass('show');
        submenu.find('a').next('.dropdown-menu').addClass('show');
        e.stopPropagation();
    });

    $('.dropdown').on("hidden.bs.dropdown", function() {
        // hide any open menus when parent closes
        $('.dropdown-menu.show').removeClass('show');
    });
}

function reloj() {
    var momentoActual = new Date();
    var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    var f = new Date();
    var fecha = f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear();
    hora = momentoActual.getHours();
    minuto = momentoActual.getMinutes();
    segundo = momentoActual.getSeconds();

    horaImprimible = fecha + " - " + hora + " : " + minuto + " : " + segundo;
    $('#reloj').text(horaImprimible);
    setTimeout(reloj, 1000);
}
const icono = document.querySelector('#icono');
const icono2 = document.querySelector('#icono2');
const icono3 = document.querySelector('#icono3');
const tooltip = document.querySelector('#tooltip');
const tooltip2 = document.querySelector('#tooltip2');
const tooltip3 = document.querySelector('#tooltip3');

const calcularPosicionTooltip = () => {
    // Calculamos las coordenadas del icono.
    const x = icono.offsetLeft;
    const y = icono.offsetTop;

    // Calculamos el tamaño del tooltip.
    const anchoTooltip = tooltip.clientWidth;
    const altoTooltip = tooltip.clientHeight;

    // Calculamos donde posicionaremos el tooltip.
    const izquierda = x - (anchoTooltip / 2) + 15;
    const arriba = y - altoTooltip - 20;

    tooltip.style.left = `${izquierda}px`;
    tooltip.style.top = `${arriba}px`;
};
const calcularPosicionTooltip2 = () => {
    // Calculamos las coordenadas del icono.
    const x = icono2.offsetLeft;
    const y = icono2.offsetTop;

    // Calculamos el tamaño del tooltip.
    const anchoTooltip2 = tooltip2.clientWidth;
    const altoTooltip2 = tooltip2.clientHeight;

    // Calculamos donde posicionaremos el tooltip.
    const izquierda = x - (anchoTooltip2 / 2) + 15;
    const arriba = y - altoTooltip2 - 20;

    tooltip2.style.left = `${izquierda}px`;
    tooltip2.style.top = `${arriba}px`;
};

const calcularPosicionTooltip3 = () => {
    // Calculamos las coordenadas del icono.
    const x = icono2.offsetLeft;
    const y = icono2.offsetTop;

    // Calculamos el tamaño del tooltip.
    const anchoTooltip3 = tooltip3.clientWidth;
    const altoTooltip3 = tooltip3.clientHeight;

    // Calculamos donde posicionaremos el tooltip.
    const izquierda = x - (anchoTooltip3 / 2) + 15;
    const arriba = y - altoTooltip3 - 20;

    tooltip3.style.left = `${izquierda}px`;
    tooltip3.style.top = `${arriba}px`;
};
window.addEventListener('load', () => {
    calcularPosicionTooltip();
    calcularPosicionTooltip2();
    calcularPosicionTooltip3();
});


window.addEventListener('resize', () => {
    calcularPosicionTooltip();
    calcularPosicionTooltip2();
    calcularPosicionTooltip3();
});

icono2.addEventListener('mouseenter', () => {
    tooltip2.classList.add('activo');

});
icono3.addEventListener('mouseenter', () => {
    tooltip3.classList.add('activo');

});

icono.addEventListener('mouseenter', () => {
    tooltip.classList.add('activo');
    console.log("activo");
});

let timer, timer2;
icono.addEventListener('mouseleave', () => {
    timer = setTimeout(() => {
        tooltip.classList.remove('activo');

    }, 500);
});
icono2.addEventListener('mouseleave', () => {
    timer2 = setTimeout(() => {
        tooltip2.classList.remove('activo');

    }, 500);
});
icono3.addEventListener('mouseleave', () => {
    timer3 = setTimeout(() => {
        tooltip3.classList.remove('activo');
    }, 500);

});
tooltip.addEventListener('mouseenter', () => clearTimeout(timer));
tooltip.addEventListener('mouseleave', () => tooltip.classList.remove('activo'));
tooltip2.addEventListener('mouseenter', () => clearTimeout(timer2));
tooltip2.addEventListener('mouseleave', () => tooltip2.classList.remove('activo'));
tooltip3.addEventListener('mouseenter', () => clearTimeout(timer3));
tooltip3.addEventListener('mouseleave', () => tooltip3.classList.remove('activo'));