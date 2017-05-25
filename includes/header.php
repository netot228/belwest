<header class="js-mainHeader">
    <nav class="navigation navigation--top hidden-xs hidden-sm">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="nav__left js-site-logo">
                    <div class="yCmsComponent yComponentWrapper">
                        <div class="banner__component banner">
                            <a href="/belweststorefront/ru/">
                                <img alt="hybris Accelerator" src="./img/belwest_logo.svg" title="hybris Accelerator"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-8">
                <div class="nav__right">
                    <ul class="nav__links nav__links--account">
                        <li class="liOffcanvas">
                            <a href="/belweststorefront/ru/login">
                                Зайти/зарегистрироваться
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="hidden-xs hidden-sm js-secondaryNavAccount collapse" id="accNavComponentDesktopOne">
        <ul class="nav__links">
        </ul>
    </div>
    <div class="hidden-xs hidden-sm js-secondaryNavCompany collapse" id="accNavComponentDesktopTwo">
        <ul class="nav__links js-nav__links">
        </ul>
    </div>
    <nav class="navigation navigation--middle js-navigation--middle">
        <div class="container-fluid">
            <div class="row">
                <div class="mobile__nav__row mobile__nav__row--table">
                    <div class="mobile__nav__row--table-group">
                        <div class="mobile__nav__row--table-row">
                            <div class="mobile__nav__row--table-cell visible-xs hidden-sm">
                                <button class="mobile__nav__row--btn btn mobile__nav__row--btn-menu js-toggle-sm-navigation" type="button">
                                    <span class="glyphicon glyphicon-align-justify">
                                    </span>
                                </button>
                            </div>
                            <div class="mobile__nav__row--table-cell visible-xs mobile__nav__row--seperator">
                                <button class="mobile__nav__row--btn btn mobile__nav__row--btn-search js-toggle-xs-search hidden-sm hidden-md hidden-lg" type="button">
                                    <span class="glyphicon glyphicon-search">
                                    </span>
                                </button>
                            </div>
                            <div class="mobile__nav__row--table-cell hidden-sm hidden-md hidden-lg mobile__nav__row--seperator">
                                <a class="mobile__nav__row--btn mobile__nav__row--btn-location btn" href="/belweststorefront/ru/store-finder">
                                    <span class="glyphicon glyphicon-map-marker">
                                    </span>
                                </a>
                            </div>
                            <div class="yCmsContentSlot miniCartSlot componentContainer mobile__nav__row--table hidden-sm hidden-md hidden-lg">
                                <div class="yCmsComponent mobile__nav__row--table-cell">
                                    <div class="nav-order-tools js-nav-order-tools display-none NAVcompONENT" data-title="">
                                        <nav class="nav-order-tools__child-wrap display-none">
                                            <div>
                                                <a href="/belweststorefront/ru/quickOrder" title="Schnellbestellung">
                                                    Schnellbestellung
                                                </a>
                                            </div>
                                            <div>
                                                <a href="/belweststorefront/ru/import/csv/saved-cart" title="Gespeicherten Warenkorb importieren">
                                                    Gespeicherten Warenkorb importieren
                                                </a>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="yCmsComponent mobile__nav__row--table-cell">
                                    <div class="nav-cart">
                                        <a class="mini-cart-link js-mini-cart-link" data-mini-cart-empty-name="Пустая сумка" data-mini-cart-items-text="Предметы" data-mini-cart-name="Мешок" data-mini-cart-refresh-url="/belweststorefront/ru/cart/miniCart/SUBTOTAL" data-mini-cart-url="/belweststorefront/ru/cart/rollover/MiniCart" href="/belweststorefront/ru/cart">
                                            <div class="mini-cart-icon">
                                                <span class="glyphicon glyphicon-shopping-cart ">
                                                </span>
                                            </div>
                                            <div class="mini-cart-price js-mini-cart-price hidden-xs hidden-sm">
                                                0,00 RUB
                                            </div>
                                            <div class="mini-cart-count js-mini-cart-count">
                                                <span class="nav-items-total">
                                                    0
                                                    <span class="items-desktop hidden-xs">
                                                        Предметы
                                                    </span>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="mini-cart-container js-mini-cart-container">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row desktop__nav">
                <div class="nav__left col-xs-12 col-sm-6">
                    <div class="row">
                        <div class="col-sm-2 hidden-xs visible-sm mobile-menu">
                            <button class="btn js-toggle-sm-navigation" type="button">
                                <span class="glyphicon glyphicon-align-justify">
                                </span>
                            </button>
                        </div>
                        <div class="col-sm-10">
                            <div class="site-search">
                                <div class="yCmsComponent">
                                    <div class="ui-front">
                                        <form action="/belweststorefront/ru/search/" method="get" name="search_form_SearchBox">
                                            <div class="input-group">
                                                <input autocomplete="off" class="form-control js-site-search-input ui-autocomplete-input" data-options='{"autocompleteUrl" : "/belweststorefront/ru/search/autocomplete/SearchBox","minCharactersBeforeRequest" : "3","waitTimeBeforeRequest" : "500","displayProductImages" : true}' id="js-site-search-input" maxlength="100" name="text" placeholder="Я ищу:" type="text" value="">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-link js_search_button" disabled="true" type="submit">
                                                            <span class="glyphicon glyphicon-search">
                                                            </span>
                                                        </button>
                                                    </span>
                                                </input>
                                            </div>
                                        </form>
                                        <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-1" style="display: none;" tabindex="0">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav__right col-xs-6 col-xs-6 hidden-xs">
                    <ul class="nav__links nav__links--shop_info">
                        <li>
                            <div class="nav-location hidden-xs">
                                <a class="btn" href="/belweststorefront/ru/store-finder">
                                    <span class="glyphicon glyphicon-map-marker">
                                    </span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="yCmsContentSlot componentContainer">
                                <div class="yCmsComponent">
                                    <div class="nav-order-tools js-nav-order-tools display-none NAVcompONENT" data-title="">
                                        <nav class="nav-order-tools__child-wrap display-none">
                                            <div>
                                                <a href="/belweststorefront/ru/quickOrder" title="Schnellbestellung">
                                                    Schnellbestellung
                                                </a>
                                            </div>
                                            <div>
                                                <a href="/belweststorefront/ru/import/csv/saved-cart" title="Gespeicherten Warenkorb importieren">
                                                    Gespeicherten Warenkorb importieren
                                                </a>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="yCmsComponent">
                                    <div class="nav-cart">
                                        <a class="mini-cart-link js-mini-cart-link" data-mini-cart-empty-name="Пустая сумка" data-mini-cart-items-text="Предметы" data-mini-cart-name="Мешок" data-mini-cart-refresh-url="/belweststorefront/ru/cart/miniCart/SUBTOTAL" data-mini-cart-url="/belweststorefront/ru/cart/rollover/MiniCart" href="/belweststorefront/ru/cart">
                                            <div class="mini-cart-icon">
                                                <span class="glyphicon glyphicon-shopping-cart ">
                                                </span>
                                            </div>
                                            <div class="mini-cart-price js-mini-cart-price hidden-xs hidden-sm">
                                                0,00 RUB
                                            </div>
                                            <div class="mini-cart-count js-mini-cart-count">
                                                <span class="nav-items-total">
                                                    0
                                                    <span class="items-desktop hidden-xs">
                                                        Предметы
                                                    </span>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="mini-cart-container js-mini-cart-container">
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <a id="skiptonavigation">
    </a>
    <nav class="navigation navigation--bottom js_navigation--bottom js-enquire-offcanvas-navigation" role="navigation">
        <ul class="sticky-nav-top hidden-lg hidden-md js-sticky-user-group hidden-md hidden-lg">
            <li class="auto liUserSign">
                <a class="userSign" href="https://hybristest.vit.belwest.com/belweststorefront/ru/login">
                    Зайти/зарегистрироваться
                </a>
                <div class="close-nav">
                    <button class="js-toggle-sm-navigation btn" type="button">
                        <span class="glyphicon glyphicon-remove">
                        </span>
                    </button>
                </div>
            </li>
        </ul>
        <div class="navigation__overflow">
            <ul class="nav__links nav__links--products nav__links--mobile js-userAccount-Links js-nav-collapse-body offcanvasGroup1 collapse in hidden-md hidden-lg" data-trigger="#signedInUserOptionsToggle">
            </ul>
            <ul class="nav__links nav__links--products js-offcanvas-links">
                <li class="auto nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                    <span class="yCmsComponent nav__link js_nav__link">
                    </span>
                    <span class="glyphicon glyphicon-chevron-right hidden-md hidden-lg nav__link--drill__down js_nav__link--drill__down">
                    </span>
                    <div class="sub__navigation js_sub__navigation col-md-12">
                        <a class="sm-back js-enquire-sub-close hidden-md hidden-lg" href="#">
                            Back
                        </a>
                        <div class="row">
                            <div class="sub-navigation-section column-20-percent">
                                <div class="title">
                                    Alle Marken
                                </div>
                                <ul class="sub-navigation-list has-title">
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                </ul>
                            </div>
                            <div class="sub-navigation-section column-20-percent">
                                <ul class="sub-navigation-list has-title">
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                </ul>
                            </div>
                            <div class="sub-navigation-section column-20-percent">
                                <ul class="sub-navigation-list has-title">
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                </ul>
                            </div>
                            <div class="sub-navigation-section column-20-percent">
                                <ul class="sub-navigation-list has-title">
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                </ul>
                            </div>
                            <div class="sub-navigation-section column-20-percent">
                                <ul class="sub-navigation-list has-title">
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="auto nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                    <span class="yCmsComponent nav__link js_nav__link">
                    </span>
                    <span class="glyphicon glyphicon-chevron-right hidden-md hidden-lg nav__link--drill__down js_nav__link--drill__down">
                    </span>
                    <div class="sub__navigation js_sub__navigation col-md-9 col-lg-6">
                        <a class="sm-back js-enquire-sub-close hidden-md hidden-lg" href="#">
                            Back
                        </a>
                        <div class="row">
                            <div class="sub-navigation-section col-md-4">
                                <div class="title">
                                    Herren
                                </div>
                                <ul class="sub-navigation-list has-title">
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/Collections/Streetwear/c/streetwear?q=:topRated:category:251100" title="Gurtel">
                                            Gurtel
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                </ul>
                            </div>
                            <div class="sub-navigation-section col-md-4">
                                <div class="title">
                                    Damen
                                </div>
                                <ul class="sub-navigation-list has-title">
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                </ul>
                            </div>
                            <div class="sub-navigation-section col-md-4">
                                <div class="title">
                                    Jugend
                                </div>
                                <ul class="sub-navigation-list has-title">
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="auto nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                    <span class="yCmsComponent nav__link js_nav__link">
                    </span>
                    <span class="glyphicon glyphicon-chevron-right hidden-md hidden-lg nav__link--drill__down js_nav__link--drill__down">
                    </span>
                    <div class="sub__navigation js_sub__navigation col-md-12 col-lg-8">
                        <a class="sm-back js-enquire-sub-close hidden-md hidden-lg" href="#">
                            Back
                        </a>
                        <div class="row">
                            <div class="sub-navigation-section col-md-3">
                                <div class="title">
                                    Herren
                                </div>
                                <ul class="sub-navigation-list has-title">
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                </ul>
                            </div>
                            <div class="sub-navigation-section col-md-3">
                                <div class="title">
                                    Damen
                                </div>
                                <ul class="sub-navigation-list has-title">
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                </ul>
                            </div>
                            <div class="sub-navigation-section col-md-3">
                                <div class="title">
                                    Jugend
                                </div>
                                <ul class="sub-navigation-list has-title">
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                </ul>
                            </div>
                            <div class="sub-navigation-section col-md-3">
                                <div class="title">
                                    Kit
                                </div>
                                <ul class="sub-navigation-list has-title">
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="auto nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                    <span class="yCmsComponent nav__link js_nav__link">
                    </span>
                    <span class="glyphicon glyphicon-chevron-right hidden-md hidden-lg nav__link--drill__down js_nav__link--drill__down">
                    </span>
                    <div class="sub__navigation js_sub__navigation col-md-6 col-lg-4">
                        <a class="sm-back js-enquire-sub-close hidden-md hidden-lg" href="#">
                            Back
                        </a>
                        <div class="row">
                            <div class="sub-navigation-section col-md-6">
                                <div class="title">
                                    Herren
                                </div>
                                <ul class="sub-navigation-list has-title">
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                </ul>
                            </div>
                            <div class="sub-navigation-section col-md-6">
                                <div class="title">
                                    Damen
                                </div>
                                <ul class="sub-navigation-list has-title">
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="auto nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                    <span class="yCmsComponent nav__link js_nav__link">
                    </span>
                    <span class="glyphicon glyphicon-chevron-right hidden-md hidden-lg nav__link--drill__down js_nav__link--drill__down">
                    </span>
                    <div class="sub__navigation js_sub__navigation col-md-6 col-lg-4">
                        <a class="sm-back js-enquire-sub-close hidden-md hidden-lg" href="#">
                            Back
                        </a>
                        <div class="row">
                            <div class="sub-navigation-section col-md-6">
                                <div class="title">
                                    Boardshorts
                                </div>
                                <ul class="sub-navigation-list has-title">
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/Categories/Streetwear-youth/Boardshorts-youth/c/270600?q=:relevance:brand:Billabong" title="Billabong">
                                            Billabong
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/Categories/Streetwear-youth/Boardshorts-youth/c/270600?q=:relevance:brand:69+Slam" title="69 Slam">
                                            69 Slam
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/Categories/Streetwear-youth/Boardshorts-youth/c/270600?q=:relevance:brand:Quiksilver" title="Quiksilver">
                                            Quiksilver
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/Categories/Streetwear-youth/Boardshorts-youth/c/270600?q=:relevance:brand:Volcom" title="Volcom">
                                            Volcom
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                </ul>
                            </div>
                            <div class="sub-navigation-section col-md-6">
                                <div class="title">
                                    T-Shirts
                                </div>
                                <ul class="sub-navigation-list has-title">
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/Categories/Streetwear-youth/T-Shirts-youth/c/270100?q=:relevance:brand:Billabong" title="Billabong">
                                            Billabong
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/Categories/Streetwear-youth/T-Shirts-youth/c/270100?q=:relevance:brand:Blue+Tomato" title="Blue Tomato">
                                            Blue Tomato
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/Categories/Streetwear-youth/T-Shirts-youth/c/270100?q=:relevance:brand:Burton" title="Burton">
                                            Burton
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/Categories/Streetwear-youth/T-Shirts-youth/c/270100?q=:relevance:brand:DC" title="DC">
                                            DC
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/Categories/Streetwear-youth/T-Shirts-youth/c/270100?q=:relevance:brand:Quiksilver" title="Quiksilver">
                                            Quiksilver
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="auto nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                    <span class="yCmsComponent nav__link js_nav__link">
                        <a href="/belweststorefront/ru/%D0%96%D0%B5%D0%BD%D1%89%D0%B8%D0%BD%D0%B0%D0%BC/c/B_WOMEN" title="Женщинам">
                            Женщинам
                        </a>
                    </span>
                    <span class="glyphicon glyphicon-chevron-right hidden-md hidden-lg nav__link--drill__down js_nav__link--drill__down">
                    </span>
                    <div class="sub__navigation js_sub__navigation col-md-6 col-lg-4">
                        <a class="sm-back js-enquire-sub-close hidden-md hidden-lg" href="#">
                            Back
                        </a>
                        <div class="row">
                            <div class="sub-navigation-section col-md-6">
                                <div class="title">
                                    ОБУВЬ
                                </div>
                                <ul class="sub-navigation-list has-title">
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%96%D0%B5%D0%BD%D1%89%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%91%D0%B0%D0%BB%D0%B5%D1%82%D0%BA%D0%B8/c/B_SH_WN_BALETKY" title="Балетки">
                                            Балетки
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%96%D0%B5%D0%BD%D1%89%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C-%D1%81-%D1%83%D0%B2%D0%B5%D0%BB%D0%B8%D1%87%D0%B5%D0%BD%D0%BD%D0%BE%D0%B9-%D0%BF%D0%BE%D0%BB%D0%BD%D0%BE%D1%82%D0%BE%D0%B9/c/B_SH_WN_BIGPOLNOTA" title="Обувь с увеличенной полнотой">
                                            Обувь с увеличенной полнотой
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%96%D0%B5%D0%BD%D1%89%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C-%D0%B1%D0%BE%D0%BB%D1%8C%D1%88%D0%B8%D1%85-%D1%80%D0%B0%D0%B7%D0%BC%D0%B5%D1%80%D0%BE%D0%B2/c/B_SH_WN_BIGRAZM" title="Обувь больших размеров">
                                            Обувь больших размеров
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%96%D0%B5%D0%BD%D1%89%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%91%D0%BE%D1%81%D0%BE%D0%BD%D0%BE%D0%B6%D0%BA%D0%B8/c/B_SH_WN_BOSONOJKI" title="Босоножки">
                                            Босоножки
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%96%D0%B5%D0%BD%D1%89%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%91%D0%BE%D1%82%D0%B8%D0%BB%D1%8C%D0%BE%D0%BD%D1%8B/c/B_SH_WN_BOTILYONY" title="Ботильоны">
                                            Ботильоны
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%96%D0%B5%D0%BD%D1%89%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%91%D0%BE%D1%82%D0%B8%D0%BD%D0%BA%D0%B8/c/B_SH_WN_BOTINKI" title="Ботинки">
                                            Ботинки
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%96%D0%B5%D0%BD%D1%89%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%9A%D0%B5%D0%B4%D1%8B-%D0%B8-%D0%BA%D1%80%D0%BE%D1%81%D1%81%D0%BE%D0%B2%D0%BA%D0%B8/c/B_SH_WN_KEDKROSS" title="Кеды и кроссовки">
                                            Кеды и кроссовки
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%96%D0%B5%D0%BD%D1%89%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%9C%D0%BE%D0%BA%D0%B0%D1%81%D0%B8%D0%BD%D1%8B/c/B_SH_WN_MOKASSINY" title="Мокасины">
                                            Мокасины
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%96%D0%B5%D0%BD%D1%89%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%9F%D0%B0%D0%BD%D1%82%D0%BE%D0%BB%D0%B5%D1%82%D1%8B-%D0%B8-%D1%88%D0%BB%D0%B5%D0%BF%D0%B0%D0%BD%D1%86%D1%8B/c/B_SH_WN_PANTSHLEP" title="Пантолеты и шлепанцы">
                                            Пантолеты и шлепанцы
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%96%D0%B5%D0%BD%D1%89%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%A1%D0%B0%D0%B1%D0%BE/c/B_SH_WN_SABO" title="Сабо">
                                            Сабо
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub-navigation-section col-md-6">
                                <ul class="sub-navigation-list has-title">
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%96%D0%B5%D0%BD%D1%89%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%9F%D0%BE%D0%BB%D1%83%D1%81%D0%B0%D0%BF%D0%BE%D0%B3%D0%B8/c/B_SH_WN_POLUSAPOJKI" title="Полусапоги">
                                            Полусапоги
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%96%D0%B5%D0%BD%D1%89%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%A1%D0%B0%D0%BD%D0%B4%D0%B0%D0%BB%D0%B8%D0%B8/c/B_SH_WN_SANDALII" title="Сандалии">
                                            Сандалии
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%96%D0%B5%D0%BD%D1%89%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%A1%D0%B0%D0%BF%D0%BE%D0%B3%D0%B8/c/B_SH_WN_SAPOGI" title="Сапоги">
                                            Сапоги
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%96%D0%B5%D0%BD%D1%89%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%A1%D0%BB%D0%B8%D0%BF%D0%BE%D0%BD%D1%8B/c/B_SH_WN_SLIPONY" title="Слипоны">
                                            Слипоны
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%96%D0%B5%D0%BD%D1%89%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%A2%D1%83%D1%84%D0%BB%D0%B8-%D0%B8-%D0%BB%D0%BE%D1%84%D0%B5%D1%80%D1%8B/c/B_SH_WN_TUFLI" title="Туфли и лоферы">
                                            Туфли и лоферы
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="auto nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                    <span class="yCmsComponent nav__link js_nav__link">
                        <a href="/belweststorefront/ru/%D0%9C%D1%83%D0%B6%D1%87%D0%B8%D0%BD%D0%B0%D0%BC/c/B_MEN" title="Мужчинам">
                            Мужчинам
                        </a>
                    </span>
                    <span class="glyphicon glyphicon-chevron-right hidden-md hidden-lg nav__link--drill__down js_nav__link--drill__down">
                    </span>
                    <div class="sub__navigation js_sub__navigation col-md-6 col-lg-4">
                        <a class="sm-back js-enquire-sub-close hidden-md hidden-lg" href="#">
                            Back
                        </a>
                        <div class="row">
                            <div class="sub-navigation-section col-md-6">
                                <div class="title">
                                    ОБУВЬ
                                </div>
                                <ul class="sub-navigation-list has-title">
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%9C%D1%83%D0%B6%D1%87%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C-%D1%81-%D1%83%D0%B2%D0%B5%D0%BB%D0%B8%D1%87%D0%B5%D0%BD%D0%BD%D0%BE%D0%B9-%D0%BF%D0%BE%D0%BB%D0%BD%D0%BE%D1%82%D0%BE%D0%B9/c/B_SH_MN_BIGPOLNOTA" title="Обувь с увеличенной полнотой">
                                            Обувь с увеличенной полнотой
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%9C%D1%83%D0%B6%D1%87%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C-%D0%B1%D0%BE%D0%BB%D1%8C%D1%88%D0%B8%D1%85-%D1%80%D0%B0%D0%B7%D0%BC%D0%B5%D1%80%D0%BE%D0%B2/c/B_SH_MN_BIGRAZM" title="Обувь больших размеров">
                                            Обувь больших размеров
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%9C%D1%83%D0%B6%D1%87%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%91%D0%BE%D1%82%D0%B8%D0%BD%D0%BA%D0%B8/c/B_SH_MN_BOTINKI" title="Ботинки">
                                            Ботинки
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%9C%D1%83%D0%B6%D1%87%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%9A%D0%B5%D0%B4%D1%8B-%D0%B8-%D0%BA%D1%80%D0%BE%D1%81%D1%81%D0%BE%D0%B2%D0%BA%D0%B8/c/B_SH_MN_KEDKROSS" title="Кеды и кроссовки">
                                            Кеды и кроссовки
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%9C%D1%83%D0%B6%D1%87%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%9C%D0%BE%D0%BA%D0%B0%D1%81%D0%B8%D0%BD%D1%8B/c/B_SH_MN_MOKASSINY" title="Мокасины">
                                            Мокасины
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%9C%D1%83%D0%B6%D1%87%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%9F%D0%B0%D0%BD%D1%82%D0%BE%D0%BB%D0%B5%D1%82%D1%8B-%D0%B8-%D1%88%D0%BB%D0%B5%D0%BF%D0%B0%D0%BD%D1%86%D1%8B/c/B_SH_MN_PANTSHLEP" title="Пантолеты и шлепанцы">
                                            Пантолеты и шлепанцы
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%9C%D1%83%D0%B6%D1%87%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%A1%D0%B0%D0%BD%D0%B4%D0%B0%D0%BB%D0%B8%D0%B8/c/B_SH_MN_SANDALII" title="Сандалии">
                                            Сандалии
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%9C%D1%83%D0%B6%D1%87%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%A1%D0%B0%D0%BF%D0%BE%D0%B3%D0%B8/c/B_SH_MN_SAPOGI" title="Сапоги">
                                            Сапоги
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%9C%D1%83%D0%B6%D1%87%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%A1%D0%BB%D0%B8%D0%BF%D0%BE%D0%BD%D1%8B/c/B_SH_MN_SLIPONY" title="Слипоны">
                                            Слипоны
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%9C%D1%83%D0%B6%D1%87%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C/%D0%A2%D1%83%D1%84%D0%BB%D0%B8-%D0%B8-%D0%BB%D0%BE%D1%84%D0%B5%D1%80%D1%8B/c/B_SH_MN_TUFLI" title="Туфли и лоферы">
                                            Туфли и лоферы
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="auto nav__links--primary ">
                    <span class="yCmsComponent nav__link js_nav__link">
                        <a href="/belweststorefront/ru/%D0%9D%D0%BE%D0%B2%D0%B8%D0%BD%D0%BA%D0%B8/c/B_NEWS" title="Новинки">
                            Новинки
                        </a>
                    </span>
                </li>
                <li class="auto nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                    <span class="yCmsComponent nav__link js_nav__link">
                        <a href="/belweststorefront/ru/%D0%9A%D0%BE%D0%BB%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B8/c/B_COLLECTIONS" title="Коллекции">
                            Коллекции
                        </a>
                    </span>
                    <span class="glyphicon glyphicon-chevron-right hidden-md hidden-lg nav__link--drill__down js_nav__link--drill__down">
                    </span>
                    <div class="sub__navigation js_sub__navigation col-md-3 col-lg-2">
                        <a class="sm-back js-enquire-sub-close hidden-md hidden-lg" href="#">
                            Back
                        </a>
                        <div class="row">
                            <div class="sub-navigation-section col-md-12">
                                <ul class="sub-navigation-list ">
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%9A%D0%BE%D0%BB%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B8/%D0%92%D0%B5%D1%81%D0%BD%D0%B0-%D0%BB%D0%B5%D1%82%D0%BE-2017/c/B_COLL_SPRING_SUMMER_2017" title="Весна лето 2017">
                                            Весна лето 2017
                                        </a>
                                    </li>
                                    <li class="yCmsComponent nav__link--secondary">
                                        <a href="/belweststorefront/ru/%D0%9A%D0%BE%D0%BB%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B8/%D0%9E%D0%B1%D1%83%D0%B2%D1%8C-%D1%81-%D0%BF%D1%80%D0%B8%D0%BD%D1%82%D0%B0%D0%BC%D0%B8/c/B_COLL_WITH_PRINT" title="Обувь с принтами">
                                            Обувь с принтами
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>