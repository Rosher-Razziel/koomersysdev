<div id="sidepanel-drop" class="sidepanel-drop"></div>
<div class="sidepanel-inner d-flex flex-column">
  <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
  <div class="app-branding">
    <a class="app-logo" href="index.html"><img class="logo-icon me-2"
        src="<?= base_url('assets/images/logos/logo-koomersys-v2.svg'); ?>" alt="logo"><span
        class="logo-text">KOOMERSYS</span></a>
  </div>

  <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('dashboard'); ?>">
          <span class="nav-icon">
            <svg width="1em" height="1em" class="bi bi-house-door" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
              <path
                d="M64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320zM384 416C384 389.1 367.5 366.1 344 356.7L344 184C344 170.7 333.3 160 320 160C306.7 160 296 170.7 296 184L296 356.7C272.5 366.2 256 389.2 256 416C256 451.3 284.7 480 320 480C355.3 480 384 451.3 384 416zM208 240C225.7 240 240 225.7 240 208C240 190.3 225.7 176 208 176C190.3 176 176 190.3 176 208C176 225.7 190.3 240 208 240zM192 320C192 302.3 177.7 288 160 288C142.3 288 128 302.3 128 320C128 337.7 142.3 352 160 352C177.7 352 192 337.7 192 320zM480 352C497.7 352 512 337.7 512 320C512 302.3 497.7 288 480 288C462.3 288 448 302.3 448 320C448 337.7 462.3 352 480 352zM464 208C464 190.3 449.7 176 432 176C414.3 176 400 190.3 400 208C400 225.7 414.3 240 432 240C449.7 240 464 225.7 464 208z" />
            </svg>
          </span>
          <span class="nav-link-text">Dashboard</span>
        </a>
      </li>
      <li class="nav-item has-submenu">

        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-venta"
          aria-expanded="false" aria-controls="submenu-venta">
          <span class="nav-icon">

            <svg width="1em" height="1em" class="bi bi-house-door" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
              <path
                d="M94.7 136.3C101.6 112.4 123.5 96 148.4 96L492.4 96C517.3 96 539.2 112.4 546.2 136.3L569.6 216.5C582.4 260.2 549.5 304 504 304C477.7 304 454.6 289.1 443.2 266.9C431.6 288.8 408.6 304 381.8 304C355.2 304 332.1 289 320.5 267C308.9 289 285.8 304 259.2 304C232.4 304 209.4 288.9 197.8 266.9C186.4 289 163.3 304 137 304C91.4 304 58.6 260.3 71.4 216.5L94.7 136.3zM160.4 416L480.4 416L480.4 349.6C488 351.2 495.9 352 503.9 352C518.2 352 531.9 349.4 544.4 344.8L544.4 496C544.4 522.5 522.9 544 496.4 544L144.4 544C117.9 544 96.4 522.5 96.4 496L96.4 344.8C108.9 349.4 122.5 352 136.9 352C145 352 152.8 351.2 160.4 349.6L160.4 416z" />
            </svg>
          </span>
          <span class="nav-link-text">Ventas</span>
          <span class="submenu-arrow">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
          </span>
        </a>
        <div id="submenu-venta" class="collapse submenu submenu-venta" data-bs-parent="#menu-accordion">
          <ul class="submenu-list list-unstyled">
            <li class="submenu-item"><a class="submenu-link" href="notifications.html">Nueva Venta</a></li>
            <li class="submenu-item"><a class="submenu-link" href="account.html">Historial de Ventas</a></li>
            <li class="submenu-item"><a class="submenu-link" href="settings.html">Devoluciones</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item has-submenu">

        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-productos"
          aria-expanded="false" aria-controls="submenu-productos">
          <span class="nav-icon">
            <svg width="1em" height="1em" class="bi bi-files" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 640 640">
              <path
                d="M390.3 282.8C390.3 303.3 373.6 320 353.1 320L282.8 320L282.8 245.6L353.1 245.6C373.6 245.6 390.3 262.3 390.3 282.8zM72 320C72 183 183 72 320 72C457 72 568 183 568 320C568 457 457 568 320 568C183 568 72 457 72 320zM439.9 282.8C439.9 234.9 401 196 353.1 196L233.2 196L233.2 444L282.8 444L282.8 369.6L353.1 369.6C401 369.6 439.9 330.7 439.9 282.8z" />
            </svg>
          </span>
          <span class="nav-link-text">Productos</span>
          <span class="submenu-arrow">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
          </span>
        </a>
        <div id="submenu-productos" class="collapse submenu submenu-productos" data-bs-parent="#menu-accordion">
          <ul class="submenu-list list-unstyled">
            <li class="submenu-item"><a class="submenu-link" href="notifications.html">Gestion de Productos</a></li>
            <li class="submenu-item"><a class="submenu-link" href="account.html">Categorias</a></li>
            <li class="submenu-item"><a class="submenu-link" href="settings.html">Inventario</a></li>
            <li class="submenu-item"><a class="submenu-link" href="settings.html">Promociones</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item has-submenu">

        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-clientes"
          aria-expanded="false" aria-controls="submenu-clientes">
          <span class="nav-icon">

            <svg width="1em" height="1em" class="bi bi-chevron-down" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
              <path
                d="M320 64C355.3 64 384 92.7 384 128C384 163.3 355.3 192 320 192C284.7 192 256 163.3 256 128C256 92.7 284.7 64 320 64zM416 376C416 401 403.3 423 384 435.9L384 528C384 554.5 362.5 576 336 576L304 576C277.5 576 256 554.5 256 528L256 435.9C236.7 423 224 401 224 376L224 336C224 283 267 240 320 240C373 240 416 283 416 336L416 376zM160 96C190.9 96 216 121.1 216 152C216 182.9 190.9 208 160 208C129.1 208 104 182.9 104 152C104 121.1 129.1 96 160 96zM176 336L176 368C176 400.5 188.1 430.1 208 452.7L208 528C208 529.2 208 530.5 208.1 531.7C199.6 539.3 188.4 544 176 544L144 544C117.5 544 96 522.5 96 496L96 439.4C76.9 428.4 64 407.7 64 384L64 352C64 299 107 256 160 256C172.7 256 184.8 258.5 195.9 262.9C183.3 284.3 176 309.3 176 336zM432 528L432 452.7C451.9 430.2 464 400.5 464 368L464 336C464 309.3 456.7 284.4 444.1 262.9C455.2 258.4 467.3 256 480 256C533 256 576 299 576 352L576 384C576 407.7 563.1 428.4 544 439.4L544 496C544 522.5 522.5 544 496 544L464 544C451.7 544 440.4 539.4 431.9 531.7C431.9 530.5 432 529.2 432 528zM480 96C510.9 96 536 121.1 536 152C536 182.9 510.9 208 480 208C449.1 208 424 182.9 424 152C424 121.1 449.1 96 480 96z" />
            </svg>
          </span>
          <span class="nav-link-text">Clientes</span>
          <span class="submenu-arrow">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
          </span>
        </a>
        <div id="submenu-clientes" class="collapse submenu submenu-clientes" data-bs-parent="#menu-accordion">
          <ul class="submenu-list list-unstyled">
            <li class="submenu-item"><a class="submenu-link" href="notifications.html">Lista de Clientes</a></li>
            <li class="submenu-item"><a class="submenu-link" href="account.html">Agregar Cliente</a></li>
            <li class="submenu-item"><a class="submenu-link" href="settings.html">Programa de Fidelidad</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item has-submenu">

        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-compras"
          aria-expanded="false" aria-controls="submenu-compras">
          <span class="nav-icon">

            <svg width="1em" height="1em" viewBox="0 0 640 640" class="bi bi-chevron-down" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M0 72C0 58.7 10.7 48 24 48L69.3 48C96.4 48 119.6 67.4 124.4 94L124.8 96L537.5 96C557.5 96 572.6 114.2 568.9 133.9L537.8 299.8C532.1 330.1 505.7 352 474.9 352L171.3 352L176.4 380.3C178.5 391.7 188.4 400 200 400L456 400C469.3 400 480 410.7 480 424C480 437.3 469.3 448 456 448L200.1 448C165.3 448 135.5 423.1 129.3 388.9L77.2 102.6C76.5 98.8 73.2 96 69.3 96L24 96C10.7 96 0 85.3 0 72zM160 528C160 501.5 181.5 480 208 480C234.5 480 256 501.5 256 528C256 554.5 234.5 576 208 576C181.5 576 160 554.5 160 528zM384 528C384 501.5 405.5 480 432 480C458.5 480 480 501.5 480 528C480 554.5 458.5 576 432 576C405.5 576 384 554.5 384 528zM336 142.4C322.7 142.4 312 153.1 312 166.4L312 200L278.4 200C265.1 200 254.4 210.7 254.4 224C254.4 237.3 265.1 248 278.4 248L312 248L312 281.6C312 294.9 322.7 305.6 336 305.6C349.3 305.6 360 294.9 360 281.6L360 248L393.6 248C406.9 248 417.6 237.3 417.6 224C417.6 210.7 406.9 200 393.6 200L360 200L360 166.4C360 153.1 349.3 142.4 336 142.4z" />
            </svg>
          </span>
          <span class="nav-link-text">Compras</span>
          <span class="submenu-arrow">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
          </span>
        </a>
        <div id="submenu-compras" class="collapse submenu submenu-compras" data-bs-parent="#menu-accordion">
          <ul class="submenu-list list-unstyled">
            <li class="submenu-item"><a class="submenu-link" href="notifications.html">Proveedores</a></li>
            <li class="submenu-item"><a class="submenu-link" href="account.html">Registrar Compra</a></li>
            <li class="submenu-item"><a class="submenu-link" href="settings.html">Historial de Compras</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item has-submenu">

        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-reportes"
          aria-expanded="false" aria-controls="submenu-reportes">
          <span class="nav-icon">

            <svg width="1em" height="1em" viewBox="0 0 640 640" class="bi bi-chevron-down" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M88 289.6L64.4 360.2L64.4 160C64.4 124.7 93.1 96 128.4 96L267.1 96C280.9 96 294.4 100.5 305.5 108.8L343.9 137.6C349.4 141.8 356.2 144 363.1 144L480.4 144C515.7 144 544.4 172.7 544.4 208L544.4 224L179 224C137.7 224 101 250.4 87.9 289.6zM509.8 512L131 512C98.2 512 75.1 479.9 85.5 448.8L133.5 304.8C140 285.2 158.4 272 179 272L557.8 272C590.6 272 613.7 304.1 603.3 335.2L555.3 479.2C548.8 498.8 530.4 512 509.8 512z" />
            </svg>
          </span>
          <span class="nav-link-text">Reportes</span>
          <span class="submenu-arrow">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
          </span>
        </a>
        <div id="submenu-reportes" class="collapse submenu submenu-reportes" data-bs-parent="#menu-accordion">
          <ul class="submenu-list list-unstyled">
            <li class="submenu-item"><a class="submenu-link" href="notifications.html">Reporte de Ventas</a></li>
            <li class="submenu-item"><a class="submenu-link" href="account.html">Productos Mas Vendidos</a></li>
            <li class="submenu-item"><a class="submenu-link" href="settings.html">Reporte de Utulidades</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item has-submenu">

        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-cajas"
          aria-expanded="false" aria-controls="submenu-cajas">
          <span class="nav-icon">

            <svg width="1em" height="1em" viewBox="0 0 640 640" class="bi bi-chevron-down" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M160 64C124.7 64 96 92.7 96 128C96 163.3 124.7 192 160 192L208 192L208 224L151 224C119.4 224 92.5 247.1 87.7 278.4L65.1 428.1C64.4 432.8 64 437.6 64 442.4L64 512C64 547.3 92.7 576 128 576L512 576C547.3 576 576 547.3 576 512L576 442.4C576 437.6 575.6 432.8 574.9 428L552.2 278.4C547.5 247.1 520.6 224 489 224L272 224L272 192L320 192C355.3 192 384 163.3 384 128C384 92.7 355.3 64 320 64L160 64zM160 112L320 112C328.8 112 336 119.2 336 128C336 136.8 328.8 144 320 144L160 144C151.2 144 144 136.8 144 128C144 119.2 151.2 112 160 112zM128 488C128 474.7 138.7 464 152 464L488 464C501.3 464 512 474.7 512 488C512 501.3 501.3 512 488 512L152 512C138.7 512 128 501.3 128 488zM176 328C162.7 328 152 317.3 152 304C152 290.7 162.7 280 176 280C189.3 280 200 290.7 200 304C200 317.3 189.3 328 176 328zM296 304C296 317.3 285.3 328 272 328C258.7 328 248 317.3 248 304C248 290.7 258.7 280 272 280C285.3 280 296 290.7 296 304zM224 408C210.7 408 200 397.3 200 384C200 370.7 210.7 360 224 360C237.3 360 248 370.7 248 384C248 397.3 237.3 408 224 408zM392 304C392 317.3 381.3 328 368 328C354.7 328 344 317.3 344 304C344 290.7 354.7 280 368 280C381.3 280 392 290.7 392 304zM320 408C306.7 408 296 397.3 296 384C296 370.7 306.7 360 320 360C333.3 360 344 370.7 344 384C344 397.3 333.3 408 320 408zM488 304C488 317.3 477.3 328 464 328C450.7 328 440 317.3 440 304C440 290.7 450.7 280 464 280C477.3 280 488 290.7 488 304zM416 408C402.7 408 392 397.3 392 384C392 370.7 402.7 360 416 360C429.3 360 440 370.7 440 384C440 397.3 429.3 408 416 408z" />
            </svg>
          </span>
          <span class="nav-link-text">Caja</span>
          <span class="submenu-arrow">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
          </span>
        </a>
        <div id="submenu-cajas" class="collapse submenu submenu-cajas" data-bs-parent="#menu-accordion">
          <ul class="submenu-list list-unstyled">
            <li class="submenu-item"><a class="submenu-link" href="notifications.html">Apertura de Caja</a></li>
            <li class="submenu-item"><a class="submenu-link" href="account.html">Corte de Caja</a></li>
            <li class="submenu-item"><a class="submenu-link" href="settings.html">Movimientos de Caja</a></li>
          </ul>
        </div>
      </li>
      <!-- <li class="nav-item has-submenu">

        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-configuracion"
          aria-expanded="false" aria-controls="submenu-configuracion">
          <span class="nav-icon">

            <svg width="1em" height="1em" viewBox="0 0 640 640" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M259.1 73.5C262.1 58.7 275.2 48 290.4 48L350.2 48C365.4 48 378.5 58.7 381.5 73.5L396 143.5C410.1 149.5 423.3 157.2 435.3 166.3L503.1 143.8C517.5 139 533.3 145 540.9 158.2L570.8 210C578.4 223.2 575.7 239.8 564.3 249.9L511 297.3C511.9 304.7 512.3 312.3 512.3 320C512.3 327.7 511.8 335.3 511 342.7L564.4 390.2C575.8 400.3 578.4 417 570.9 430.1L541 481.9C533.4 495 517.6 501.1 503.2 496.3L435.4 473.8C423.3 482.9 410.1 490.5 396.1 496.6L381.7 566.5C378.6 581.4 365.5 592 350.4 592L290.6 592C275.4 592 262.3 581.3 259.3 566.5L244.9 496.6C230.8 490.6 217.7 482.9 205.6 473.8L137.5 496.3C123.1 501.1 107.3 495.1 99.7 481.9L69.8 430.1C62.2 416.9 64.9 400.3 76.3 390.2L129.7 342.7C128.8 335.3 128.4 327.7 128.4 320C128.4 312.3 128.9 304.7 129.7 297.3L76.3 249.8C64.9 239.7 62.3 223 69.8 209.9L99.7 158.1C107.3 144.9 123.1 138.9 137.5 143.7L205.3 166.2C217.4 157.1 230.6 149.5 244.6 143.4L259.1 73.5zM320.3 400C364.5 399.8 400.2 363.9 400 319.7C399.8 275.5 363.9 239.8 319.7 240C275.5 240.2 239.8 276.1 240 320.3C240.2 364.5 276.1 400.2 320.3 400z" />
            </svg>
          </span>
          <span class="nav-link-text">Configuracion</span>
          <span class="submenu-arrow">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
          </span>
        </a>
        <div id="submenu-configuracion" class="collapse submenu submenu-configuracion" data-bs-parent="#menu-accordion">
          <ul class="submenu-list list-unstyled">
            <li class="submenu-item"><a class="submenu-link" href="notifications.html">Datos de la Empresa</a></li>
            <li class="submenu-item"><a class="submenu-link" href="<?= base_url('users'); ?>">Usuarios y Permisos</a></li>
            <li class="submenu-item"><a class="submenu-link" href="settings.html">Imprecion y Facturacion</a></li>
            <li class="submenu-item"><a class="submenu-link" href="settings.html">Respaldo de Base de Datos</a></li>
          </ul>
        </div>
      </li> -->
      <!-- TEST SUBMENU -->
      <li class="nav-item has-submenu">
        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-configuracion"
          aria-expanded="false" aria-controls="submenu-configuracion">
          <span class="nav-icon">
            <!-- icono aquí -->
            <svg width="1em" height="1em" viewBox="0 0 640 640" class="bi bi-chevron-down" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M259.1 73.5C262.1 58.7 275.2 48 290.4 48L350.2 48C365.4 48 378.5 58.7 381.5 73.5L396 143.5C410.1 149.5 423.3 157.2 435.3 166.3L503.1 143.8C517.5 139 533.3 145 540.9 158.2L570.8 210C578.4 223.2 575.7 239.8 564.3 249.9L511 297.3C511.9 304.7 512.3 312.3 512.3 320C512.3 327.7 511.8 335.3 511 342.7L564.4 390.2C575.8 400.3 578.4 417 570.9 430.1L541 481.9C533.4 495 517.6 501.1 503.2 496.3L435.4 473.8C423.3 482.9 410.1 490.5 396.1 496.6L381.7 566.5C378.6 581.4 365.5 592 350.4 592L290.6 592C275.4 592 262.3 581.3 259.3 566.5L244.9 496.6C230.8 490.6 217.7 482.9 205.6 473.8L137.5 496.3C123.1 501.1 107.3 495.1 99.7 481.9L69.8 430.1C62.2 416.9 64.9 400.3 76.3 390.2L129.7 342.7C128.8 335.3 128.4 327.7 128.4 320C128.4 312.3 128.9 304.7 129.7 297.3L76.3 249.8C64.9 239.7 62.3 223 69.8 209.9L99.7 158.1C107.3 144.9 123.1 138.9 137.5 143.7L205.3 166.2C217.4 157.1 230.6 149.5 244.6 143.4L259.1 73.5zM320.3 400C364.5 399.8 400.2 363.9 400 319.7C399.8 275.5 363.9 239.8 319.7 240C275.5 240.2 239.8 276.1 240 320.3C240.2 364.5 276.1 400.2 320.3 400z" />
            </svg>
          </span>
          <span class="nav-link-text">Configuración</span>
          <span class="submenu-arrow">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
          </span>
        </a>

        <div id="submenu-configuracion" class="collapse submenu submenu-configuracion" data-bs-parent="#menu-accordion">
          <ul class="submenu-list list-unstyled">
            <li class="submenu-item">
              <a class="submenu-link" href="notifications.html">
                <span class="nav-link-text">
                  <!-- Icono a la izquierda -->
                  <svg width="1.2em" height="1.2em" viewBox="0 0 640 640" class="bi bi-chevron-down" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M259.1 73.5C262.1 58.7 275.2 48 290.4 48L350.2 48C365.4 48 378.5 58.7 381.5 73.5L396 143.5C410.1 149.5 423.3 157.2 435.3 166.3L503.1 143.8C517.5 139 533.3 145 540.9 158.2L570.8 210C578.4 223.2 575.7 239.8 564.3 249.9L511 297.3C511.9 304.7 512.3 312.3 512.3 320C512.3 327.7 511.8 335.3 511 342.7L564.4 390.2C575.8 400.3 578.4 417 570.9 430.1L541 481.9C533.4 495 517.6 501.1 503.2 496.3L435.4 473.8C423.3 482.9 410.1 490.5 396.1 496.6L381.7 566.5C378.6 581.4 365.5 592 350.4 592L290.6 592C275.4 592 262.3 581.3 259.3 566.5L244.9 496.6C230.8 490.6 217.7 482.9 205.6 473.8L137.5 496.3C123.1 501.1 107.3 495.1 99.7 481.9L69.8 430.1C62.2 416.9 64.9 400.3 76.3 390.2L129.7 342.7C128.8 335.3 128.4 327.7 128.4 320C128.4 312.3 128.9 304.7 129.7 297.3L76.3 249.8C64.9 239.7 62.3 223 69.8 209.9L99.7 158.1C107.3 144.9 123.1 138.9 137.5 143.7L205.3 166.2C217.4 157.1 230.6 149.5 244.6 143.4L259.1 73.5zM320.3 400C364.5 399.8 400.2 363.9 400 319.7C399.8 275.5 363.9 239.8 319.7 240C275.5 240.2 239.8 276.1 240 320.3C240.2 364.5 276.1 400.2 320.3 400z" />
                  </svg>
                 
                  Datos de la empresa
                </span>
              </a>
            </li>

            <!-- Submenu dentro de "Usuarios y Permisos" -->
            <li class="submenu-item has-submenu">
              <a class="submenu-link submenu-toggle" href="#" data-bs-toggle="collapse"
                data-bs-target="#subsubmenu-usuarios" aria-expanded="false" aria-controls="subsubmenu-usuarios">

                <span class="nav-link-text">
                  <!-- Icono a la izquierda -->
                  <svg width="1.2em" height="1.2em" viewBox="0 0 640 640" class="bi bi-chevron-down" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M259.1 73.5C262.1 58.7 275.2 48 290.4 48L350.2 48C365.4 48 378.5 58.7 381.5 73.5L396 143.5C410.1 149.5 423.3 157.2 435.3 166.3L503.1 143.8C517.5 139 533.3 145 540.9 158.2L570.8 210C578.4 223.2 575.7 239.8 564.3 249.9L511 297.3C511.9 304.7 512.3 312.3 512.3 320C512.3 327.7 511.8 335.3 511 342.7L564.4 390.2C575.8 400.3 578.4 417 570.9 430.1L541 481.9C533.4 495 517.6 501.1 503.2 496.3L435.4 473.8C423.3 482.9 410.1 490.5 396.1 496.6L381.7 566.5C378.6 581.4 365.5 592 350.4 592L290.6 592C275.4 592 262.3 581.3 259.3 566.5L244.9 496.6C230.8 490.6 217.7 482.9 205.6 473.8L137.5 496.3C123.1 501.1 107.3 495.1 99.7 481.9L69.8 430.1C62.2 416.9 64.9 400.3 76.3 390.2L129.7 342.7C128.8 335.3 128.4 327.7 128.4 320C128.4 312.3 128.9 304.7 129.7 297.3L76.3 249.8C64.9 239.7 62.3 223 69.8 209.9L99.7 158.1C107.3 144.9 123.1 138.9 137.5 143.7L205.3 166.2C217.4 157.1 230.6 149.5 244.6 143.4L259.1 73.5zM320.3 400C364.5 399.8 400.2 363.9 400 319.7C399.8 275.5 363.9 239.8 319.7 240C275.5 240.2 239.8 276.1 240 320.3C240.2 364.5 276.1 400.2 320.3 400z" />
                  </svg>
                  Usuarios y Permisos
                </span>

                <!-- <span class="nav-link-text">Usuarios y permisos</span> -->

                <span class="submenu-arrow">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                  </svg>
                </span>
              </a>

              <div id="subsubmenu-usuarios" class="collapse submenu" data-bs-parent="#submenu-configuracion">
                <ul class="list-unstyled">
                  <li class="submenu-item  ps-4">
                    <a class="submenu-link" href="<?= base_url('users'); ?>">
                      <span class="nav-link-text">
                        <!-- Icono a la izquierda -->
                        <svg width="1.2em" height="1.2em" viewBox="0 0 640 640" class="bi bi-chevron-down"
                          fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M259.1 73.5C262.1 58.7 275.2 48 290.4 48L350.2 48C365.4 48 378.5 58.7 381.5 73.5L396 143.5C410.1 149.5 423.3 157.2 435.3 166.3L503.1 143.8C517.5 139 533.3 145 540.9 158.2L570.8 210C578.4 223.2 575.7 239.8 564.3 249.9L511 297.3C511.9 304.7 512.3 312.3 512.3 320C512.3 327.7 511.8 335.3 511 342.7L564.4 390.2C575.8 400.3 578.4 417 570.9 430.1L541 481.9C533.4 495 517.6 501.1 503.2 496.3L435.4 473.8C423.3 482.9 410.1 490.5 396.1 496.6L381.7 566.5C378.6 581.4 365.5 592 350.4 592L290.6 592C275.4 592 262.3 581.3 259.3 566.5L244.9 496.6C230.8 490.6 217.7 482.9 205.6 473.8L137.5 496.3C123.1 501.1 107.3 495.1 99.7 481.9L69.8 430.1C62.2 416.9 64.9 400.3 76.3 390.2L129.7 342.7C128.8 335.3 128.4 327.7 128.4 320C128.4 312.3 128.9 304.7 129.7 297.3L76.3 249.8C64.9 239.7 62.3 223 69.8 209.9L99.7 158.1C107.3 144.9 123.1 138.9 137.5 143.7L205.3 166.2C217.4 157.1 230.6 149.5 244.6 143.4L259.1 73.5zM320.3 400C364.5 399.8 400.2 363.9 400 319.7C399.8 275.5 363.9 239.8 319.7 240C275.5 240.2 239.8 276.1 240 320.3C240.2 364.5 276.1 400.2 320.3 400z" />
                        </svg>
                        Registrar Usuario
                      </span>
                    </a>
                  </li>
                  <li class="submenu-item  ps-4">
                    <a class="submenu-link" href="<?= base_url('roles'); ?>">
                      <span class="nav-link-text">
                        <!-- Icono a la izquierda -->
                        <svg width="1.2em" height="1.2em" viewBox="0 0 640 640" class="bi bi-chevron-down"
                          fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M259.1 73.5C262.1 58.7 275.2 48 290.4 48L350.2 48C365.4 48 378.5 58.7 381.5 73.5L396 143.5C410.1 149.5 423.3 157.2 435.3 166.3L503.1 143.8C517.5 139 533.3 145 540.9 158.2L570.8 210C578.4 223.2 575.7 239.8 564.3 249.9L511 297.3C511.9 304.7 512.3 312.3 512.3 320C512.3 327.7 511.8 335.3 511 342.7L564.4 390.2C575.8 400.3 578.4 417 570.9 430.1L541 481.9C533.4 495 517.6 501.1 503.2 496.3L435.4 473.8C423.3 482.9 410.1 490.5 396.1 496.6L381.7 566.5C378.6 581.4 365.5 592 350.4 592L290.6 592C275.4 592 262.3 581.3 259.3 566.5L244.9 496.6C230.8 490.6 217.7 482.9 205.6 473.8L137.5 496.3C123.1 501.1 107.3 495.1 99.7 481.9L69.8 430.1C62.2 416.9 64.9 400.3 76.3 390.2L129.7 342.7C128.8 335.3 128.4 327.7 128.4 320C128.4 312.3 128.9 304.7 129.7 297.3L76.3 249.8C64.9 239.7 62.3 223 69.8 209.9L99.7 158.1C107.3 144.9 123.1 138.9 137.5 143.7L205.3 166.2C217.4 157.1 230.6 149.5 244.6 143.4L259.1 73.5zM320.3 400C364.5 399.8 400.2 363.9 400 319.7C399.8 275.5 363.9 239.8 319.7 240C275.5 240.2 239.8 276.1 240 320.3C240.2 364.5 276.1 400.2 320.3 400z" />
                        </svg>
                        Permisos
                      </span>
                    </a>
                  </li>
                  <li class="submenu-item  ps-4">
                    <a class="submenu-link" href="<?= base_url('permisos'); ?>">
                      <span class="nav-link-text">
                        <!-- Icono a la izquierda -->
                        <svg width="1.2em" height="1.2em" viewBox="0 0 640 640" class="bi bi-chevron-down"
                          fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M259.1 73.5C262.1 58.7 275.2 48 290.4 48L350.2 48C365.4 48 378.5 58.7 381.5 73.5L396 143.5C410.1 149.5 423.3 157.2 435.3 166.3L503.1 143.8C517.5 139 533.3 145 540.9 158.2L570.8 210C578.4 223.2 575.7 239.8 564.3 249.9L511 297.3C511.9 304.7 512.3 312.3 512.3 320C512.3 327.7 511.8 335.3 511 342.7L564.4 390.2C575.8 400.3 578.4 417 570.9 430.1L541 481.9C533.4 495 517.6 501.1 503.2 496.3L435.4 473.8C423.3 482.9 410.1 490.5 396.1 496.6L381.7 566.5C378.6 581.4 365.5 592 350.4 592L290.6 592C275.4 592 262.3 581.3 259.3 566.5L244.9 496.6C230.8 490.6 217.7 482.9 205.6 473.8L137.5 496.3C123.1 501.1 107.3 495.1 99.7 481.9L69.8 430.1C62.2 416.9 64.9 400.3 76.3 390.2L129.7 342.7C128.8 335.3 128.4 327.7 128.4 320C128.4 312.3 128.9 304.7 129.7 297.3L76.3 249.8C64.9 239.7 62.3 223 69.8 209.9L99.7 158.1C107.3 144.9 123.1 138.9 137.5 143.7L205.3 166.2C217.4 157.1 230.6 149.5 244.6 143.4L259.1 73.5zM320.3 400C364.5 399.8 400.2 363.9 400 319.7C399.8 275.5 363.9 239.8 319.7 240C275.5 240.2 239.8 276.1 240 320.3C240.2 364.5 276.1 400.2 320.3 400z" />
                        </svg>
                        Carga Masiva
                      </span>
                    </a>
                  </li>
                  <li class="submenu-item  ps-4">
                    <a class="submenu-link" href="<?= base_url('permisos'); ?>">
                      <span class="nav-link-text">
                        <!-- Icono a la izquierda -->
                        <svg width="1.2em" height="1.2em" viewBox="0 0 640 640" class="bi bi-chevron-down"
                          fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M259.1 73.5C262.1 58.7 275.2 48 290.4 48L350.2 48C365.4 48 378.5 58.7 381.5 73.5L396 143.5C410.1 149.5 423.3 157.2 435.3 166.3L503.1 143.8C517.5 139 533.3 145 540.9 158.2L570.8 210C578.4 223.2 575.7 239.8 564.3 249.9L511 297.3C511.9 304.7 512.3 312.3 512.3 320C512.3 327.7 511.8 335.3 511 342.7L564.4 390.2C575.8 400.3 578.4 417 570.9 430.1L541 481.9C533.4 495 517.6 501.1 503.2 496.3L435.4 473.8C423.3 482.9 410.1 490.5 396.1 496.6L381.7 566.5C378.6 581.4 365.5 592 350.4 592L290.6 592C275.4 592 262.3 581.3 259.3 566.5L244.9 496.6C230.8 490.6 217.7 482.9 205.6 473.8L137.5 496.3C123.1 501.1 107.3 495.1 99.7 481.9L69.8 430.1C62.2 416.9 64.9 400.3 76.3 390.2L129.7 342.7C128.8 335.3 128.4 327.7 128.4 320C128.4 312.3 128.9 304.7 129.7 297.3L76.3 249.8C64.9 239.7 62.3 223 69.8 209.9L99.7 158.1C107.3 144.9 123.1 138.9 137.5 143.7L205.3 166.2C217.4 157.1 230.6 149.5 244.6 143.4L259.1 73.5zM320.3 400C364.5 399.8 400.2 363.9 400 319.7C399.8 275.5 363.9 239.8 319.7 240C275.5 240.2 239.8 276.1 240 320.3C240.2 364.5 276.1 400.2 320.3 400z" />
                        </svg>
                        Descarga CSV
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="submenu-item">
              <a class="submenu-link" href="settings.html">
                <span class="nav-link-text">
                  <!-- Icono a la izquierda -->
                  <svg width="1.2em" height="1.2em" viewBox="0 0 640 640" class="bi bi-chevron-down" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M259.1 73.5C262.1 58.7 275.2 48 290.4 48L350.2 48C365.4 48 378.5 58.7 381.5 73.5L396 143.5C410.1 149.5 423.3 157.2 435.3 166.3L503.1 143.8C517.5 139 533.3 145 540.9 158.2L570.8 210C578.4 223.2 575.7 239.8 564.3 249.9L511 297.3C511.9 304.7 512.3 312.3 512.3 320C512.3 327.7 511.8 335.3 511 342.7L564.4 390.2C575.8 400.3 578.4 417 570.9 430.1L541 481.9C533.4 495 517.6 501.1 503.2 496.3L435.4 473.8C423.3 482.9 410.1 490.5 396.1 496.6L381.7 566.5C378.6 581.4 365.5 592 350.4 592L290.6 592C275.4 592 262.3 581.3 259.3 566.5L244.9 496.6C230.8 490.6 217.7 482.9 205.6 473.8L137.5 496.3C123.1 501.1 107.3 495.1 99.7 481.9L69.8 430.1C62.2 416.9 64.9 400.3 76.3 390.2L129.7 342.7C128.8 335.3 128.4 327.7 128.4 320C128.4 312.3 128.9 304.7 129.7 297.3L76.3 249.8C64.9 239.7 62.3 223 69.8 209.9L99.7 158.1C107.3 144.9 123.1 138.9 137.5 143.7L205.3 166.2C217.4 157.1 230.6 149.5 244.6 143.4L259.1 73.5zM320.3 400C364.5 399.8 400.2 363.9 400 319.7C399.8 275.5 363.9 239.8 319.7 240C275.5 240.2 239.8 276.1 240 320.3C240.2 364.5 276.1 400.2 320.3 400z" />
                  </svg>
                  Imprecion y Facturacion
                </span>
              </a>
            </li>
            <li class="submenu-item">
              <a class="submenu-link" href="settings.html">
                <span class="nav-link-text">
                  <!-- Icono a la izquierda -->
                  <svg width="1.2em" height="1.2em" viewBox="0 0 640 640" class="bi bi-chevron-down" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M259.1 73.5C262.1 58.7 275.2 48 290.4 48L350.2 48C365.4 48 378.5 58.7 381.5 73.5L396 143.5C410.1 149.5 423.3 157.2 435.3 166.3L503.1 143.8C517.5 139 533.3 145 540.9 158.2L570.8 210C578.4 223.2 575.7 239.8 564.3 249.9L511 297.3C511.9 304.7 512.3 312.3 512.3 320C512.3 327.7 511.8 335.3 511 342.7L564.4 390.2C575.8 400.3 578.4 417 570.9 430.1L541 481.9C533.4 495 517.6 501.1 503.2 496.3L435.4 473.8C423.3 482.9 410.1 490.5 396.1 496.6L381.7 566.5C378.6 581.4 365.5 592 350.4 592L290.6 592C275.4 592 262.3 581.3 259.3 566.5L244.9 496.6C230.8 490.6 217.7 482.9 205.6 473.8L137.5 496.3C123.1 501.1 107.3 495.1 99.7 481.9L69.8 430.1C62.2 416.9 64.9 400.3 76.3 390.2L129.7 342.7C128.8 335.3 128.4 327.7 128.4 320C128.4 312.3 128.9 304.7 129.7 297.3L76.3 249.8C64.9 239.7 62.3 223 69.8 209.9L99.7 158.1C107.3 144.9 123.1 138.9 137.5 143.7L205.3 166.2C217.4 157.1 230.6 149.5 244.6 143.4L259.1 73.5zM320.3 400C364.5 399.8 400.2 363.9 400 319.7C399.8 275.5 363.9 239.8 319.7 240C275.5 240.2 239.8 276.1 240 320.3C240.2 364.5 276.1 400.2 320.3 400z" />
                  </svg>
                  Respaldo de DB
                </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

    </ul>
  </nav>
  <div class="app-sidepanel-footer">
    <nav class="app-nav app-nav-footer">
      <ul class="app-menu footer-menu list-unstyled">
        <li class="nav-item">

          <a class="nav-link" href="settings.html">
            <span class="nav-icon">
              <svg width="1em" height="1em" viewBox="0 0 640 640" class="bi bi-chevron-down" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M224 160C241.7 160 256 145.7 256 128C256 110.3 241.7 96 224 96L160 96C107 96 64 139 64 192L64 448C64 501 107 544 160 544L224 544C241.7 544 256 529.7 256 512C256 494.3 241.7 480 224 480L160 480C142.3 480 128 465.7 128 448L128 192C128 174.3 142.3 160 160 160L224 160zM566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L438.6 169.3C426.1 156.8 405.8 156.8 393.3 169.3C380.8 181.8 380.8 202.1 393.3 214.6L466.7 288L256 288C238.3 288 224 302.3 224 320C224 337.7 238.3 352 256 352L466.7 352L393.3 425.4C380.8 437.9 380.8 458.2 393.3 470.7C405.8 483.2 426.1 483.2 438.6 470.7L566.6 342.7z" />
              </svg>
            </span>
            <span class="nav-link-text">Cerrar Sesion</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</div>