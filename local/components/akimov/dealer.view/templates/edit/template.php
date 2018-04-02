<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
_c($arResult);
_c($_REQUEST);
?>
<section class="wrap_title wrap_title--pages">
    <div class="wrap_min">
        <div class="main_title">
            <h2>личный кабинет</h2>
        </div>
    </div>
</section>
<section class="lk-edit">
    <div class="wrap">
        <div class="top">
            <div class="img">
                <div class="foto"<?if($arResult["DEALER"]["PREVIEW_PICTURE"]):?> style="background: transparent url(<?=$arResult["DEALER"]["PICTURE"]["SRC"]?>) no-repeat center / contain"<?endif?>></div>
                <input type="file" id="downloadFoto" hidden="hidden" name="logo">
                <label for="downloadFoto" class="add-foto">
                    <span><?=$arResult["DEALER"]["PREVIEW_PICTURE"] ? "Обновить лого" : "Загрузить лого"?></span>
                </label>
            </div>
            <div class="info">
                <p class="org-name">
                    <span class="text">Название организации</span>
                    <span class="name"><?=$arResult["DEALER"]["NAME"]?></span>
                </p>
                <div class="inner">
                    <div class="item">
                        <span class="text">Индекс</span>
                        <label>
                            <input type="text" name="zip" value="<?=$arResult["DEALER"]["PROPERTY_ZIP_VALUE"]?>">
                            <span class="ico"></span>
                        </label>
                    </div>
                    <div class="item">
                        <span class="text">Город</span>
                        <label>
                            <input type="text" name="city" value="<?=$arResult["DEALER"]["PROPERTY_CITY_VALUE"]?>">
                            <span class="ico"></span>
                        </label>
                    </div>
                    <div class="item">
                        <span class="text">Адрес</span>
                        <label>
                            <input type="text" name="address" value="<?=$arResult["DEALER"]["PROPERTY_ADDRESS_VALUE"]?>">
                            <span class="ico"></span>
                        </label>
                    </div>
                    <div class="item item--short">
                        <span class="text">Сайт</span>
                        <label>
                            <input type="text" name="web" value="<?=$arResult["DEALER"]["PROPERTY_WEB_VALUE"]?>">
                            <span class="ico"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="company-employees">
    <div class="wrap">
        <div class="inner-title">
            <span class="title">Сотрудники компании</span>
            <span class="plus-btn employees-add-btn">Добавить сотрудника</span>
            <form class="company-employees-add" data-mode="employeeAdd">
                <input type="hidden" name="user" value="<?=$arResult["USER_ID"]?>">
                <input type="hidden" name="dealer" value="<?=$arResult["DEALER_ID"]?>">
                <span class="close"></span>
                <div class="item">
                    <span class="text">Фамилия *</span>
                    <label>
                        <input type="text" name="last_name" required>
                        <span class="ico"></span>
                    </label>
                    <div class="error">Введите фамилию сотрудника</div>
                </div>
                <div class="item">
                    <span class="text">Имя *</span>
                    <label>
                        <input type="text" name="name" required>
                        <span class="ico"></span>
                    </label>
                    <div class="error">Введите имя сотрудника</div>
                </div>
                <div class="item">
                    <span class="text">Город</span>
                    <label>
                        <input type="text" name="city">
                        <span class="ico"></span>
                    </label>
                </div>
                <div class="item">
                    <span class="text">E-Mail *</span>
                    <label>
                        <input type="text" name="email" required>
                        <span class="ico"></span>
                    </label>
                    <div class="error">E-Mail сотрудника будет использоваться для входа</div>
                </div>
                <div class="item">
                    <span class="text">Телефон *</span>
                    <label>
                        <input type="text" name="phone" required>
                        <span class="ico"></span>
                    </label>
                    <div class="error">Укажите телефон сотрудника</div>
                </div>
                <div class="item">
                    <span class="text">ICQ</span>
                    <label>
                        <input type="text" name="icq">
                        <span class="ico"></span>
                    </label>
                </div>
                <div class="item">
                    <span class="text">Skype</span>
                    <label>
                        <input type="text" name="skype">
                        <span class="ico"></span>
                    </label>
                </div>
                <div class="add-foto">
                    <div class="left">
                        <label class="choose-file">
                            <input type="file" name="photo" hidden="hidden" class="type-file">Выберите файл
                        </label>
                        <span class="delete-file">Удалить файл</span>
                        <input type="text" value="Файл не выбран" class="new-value">
                    </div>
                </div>
                <div class="message"></div>
                <button class="square_button company-employees-add-btn">
                    <span>Создать аккаунт и настроить ограничения</span>
                </button>
            </form>

            <form class="edit-managers_item" data-mode="employeeSetPermission">
                <input type="hidden" name="user" value="<?=$arResult["USER_ID"]?>">
                <input type="hidden" name="dealer" value="<?=$arResult["DEALER_ID"]?>">
                <input type="hidden" name="employee" value="">

                <span class="close"></span>
                <p class="title">Настроить аккаунт</p>
                <div class="inner">
                    <div class="item">
                        <input type="checkbox" hidden="hidden" class="radio-check-input" id="employeeAdd_perm_1" name="permission[]" value="1" checked>
                        <label for="employeeAdd_perm_1" class="radio-check">Отключить доступ</label>
                    </div>
                    <div class="item">
                        <input type="checkbox" hidden="hidden" class="radio-check-input" id="employeeAdd_perm_2" name="permission[]" value="2">
                        <label for="employeeAdd_perm_2" class="radio-check">Не показывать оборот компании</label>
                    </div>
                    <div class="item">
                        <input type="checkbox" hidden="hidden" class="radio-check-input" id="employeeAdd_perm_3" name="permission[]" value="3">
                        <label for="employeeAdd_perm_3" class="radio-check">Не показывать текущую базовую скидку</label>
                    </div>
                    <div class="item">
                        <input type="checkbox" hidden="hidden" class="radio-check-input" id="employeeAdd_perm_4" name="permission[]" value="4">
                        <label for="employeeAdd_perm_4" class="radio-check">Не показывать юридические лица</label>
                    </div>
                    <div class="item">
                        <input type="checkbox" hidden="hidden" class="radio-check-input" id="employeeAdd_perm_5" name="permission[]" value="5">
                        <label for="employeeAdd_perm_5" class="radio-check">Отключить возможность создания счетов</label>
                    </div>
                    <div class="item">
                        <input type="checkbox" hidden="hidden" class="radio-check-input" id="employeeAdd_perm_6" name="permission[]" value="6">
                        <label for="employeeAdd_perm_6" class="radio-check">Отключить историю отправленных заказов</label>
                    </div>
                </div>
                <button class="square_button">
                    <span>создать аккаунт</span>
                </button>
            </form>
        </div>
        <div class="grid">
            <?foreach($arResult["EMPLOYEES"] as $arEmployee):?>
                <div class="col col_4 wrap-managers_item">
                    <form class="company-employees-add">
                        <span class="close"></span>
                        <div class="item">
                            <span class="text">Фамилия *</span>
                            <label>
                                <input type="text" name="last_name" required value="<?=$arEmployee["LAST_NAME"]?>">
                                <span class="ico"></span>
                            </label>
                        </div>
                        <div class="item">
                            <span class="text">Имя *</span>
                            <label>
                                <input type="text" name="name" required value="<?=$arEmployee["NAME"]?>">
                                <span class="ico"></span>
                            </label>
                        </div>
                        <div class="item">
                            <span class="text">Город</span>
                            <label>
                                <input type="text" name="city" value="<?=$arEmployee["PERSONAL_CITY"]?>">
                                <span class="ico"></span>
                            </label>
                        </div>
                        <div class="item">
                            <span class="text">E-Mail *</span>
                            <label>
                                <input type="text" name="email" required value="<?=$arEmployee["EMAIL"]?>">
                                <span class="ico"></span>
                            </label>
                        </div>
                        <div class="item">
                            <span class="text">Телефон</span>
                            <label>
                                <input type="text" name="phone" required value="<?=$arEmployee["PERSONAL_PHONE"]?>">
                                <span class="ico"></span>
                            </label>
                        </div>
                        <div class="item">
                            <span class="text">ICQ</span>
                            <label>
                                <input type="text" name="icq" value="<?=$arEmployee["PERSONAL_ICQ"]?>">
                                <span class="ico"></span>
                            </label>
                        </div>
                        <div class="item">
                            <span class="text">Skype</span>
                            <label>
                                <input type="text" name="skype" value="<?=$arEmployee["UF_SKYPE"]?>">
                                <span class="ico"></span>
                            </label>
                        </div>
                        <div class="add-foto">
                            <?if($arEmployee["PERSONAL_PHOTO"]):?>
                                <div class="img">
                                    <div class="foto" style="background: transparent url(<?=CFile::GetPath($arEmployee["PERSONAL_PHOTO"])?>) no-repeat center / contain"></div>
                                    <input type="file" id="personalFoto_<?=$arEmployee["ID"]?>" hidden="hidden" name="photo">
                                    <label for="personalFoto_<?=$arEmployee["ID"]?>" class="add-foto">
                                        <span>Обновить Фото</span>
                                    </label>
                                </div>
                            <?else:?>
                                <div class="left">
                                    <label class="choose-file">
                                        <input type="file" name="photo" hidden="hidden" class="type-file">Выберите файл
                                    </label>
                                    <span class="delete-file">Удалить файл</span>
                                    <input type="text" value="Файл не выбран" class="new-value">
                                </div>
                            <?endif?>
                        </div>
                        <span class="square_button company-employees-save-btn"><span>Сохранить изменения</span></span>
                    </form>
                    <form class="edit-managers_item">
                        <span class="close"></span>
                        <p class="title">настроить аккаунт</p>
                        <div class="inner">
                            <div class="item">
                                <input type="checkbox" hidden="hidden" class="radio-check-input" id="1">
                                <label for="1" class="radio-check">Отключить доступ</label>
                            </div>
                            <div class="item">
                                <input type="checkbox" hidden="hidden" class="radio-check-input" id="2">
                                <label for="2" class="radio-check">Не показывать оборот компании</label>
                            </div>
                            <div class="item">
                                <input type="checkbox" hidden="hidden" class="radio-check-input" id="3">
                                <label for="3" class="radio-check">Не показывать текущую базовую скидку</label>
                            </div>
                            <div class="item">
                                <input type="checkbox" hidden="hidden" class="radio-check-input" id="4">
                                <label for="4" class="radio-check">Не показывать юридические лица</label>
                            </div>
                            <div class="item">
                                <input type="checkbox" hidden="hidden" class="radio-check-input" id="5">
                                <label for="5" class="radio-check">Отключить возможность создания счетов</label>
                            </div>
                            <div class="item">
                                <input type="checkbox" hidden="hidden" class="radio-check-input" id="6">
                                <label for="6" class="radio-check">Отключить историю отправленных заказов</label>
                            </div>
                        </div>
                        <button type="button" class="square_button">
                            <span>Сохранить изменения</span>
                        </button>
                    </form>
                    <div class="contacts_managers_item">
                        <?if($arEmployee["UF_ACCESS"] == BX_DEALER_ADMIN):?>
                            <span class="label">Руководитель</span>
                        <?else:?>
                            <div class="tools"></div>
                        <?endif?>
                        <div class="img">
                            <img src="<?=$arEmployee["PICTURE"]["SRC"]?>" alt="<?=$arEmployee["NAME"]?>">
                        </div>
                        <p class="name"><?=$arEmployee["NAME"]?></p>
                        <p class="city"><?=$arEmployee["ADDRESS"]?></p>
                        <p class="mail">
                            <a href="mailto:<?=$arEmployee["EMAIL"]?>"><?=$arEmployee["EMAIL"]?></a>
                        </p>
                        <ul class="info">
                            <?//if($arEmployee["PERSONAL_PHONE"]):?>
                                <li>
                                    <span>Телефон</span>
                                    <span><?=$arEmployee["PERSONAL_PHONE"]?></span>
                                </li>
                            <?/*endif;
                            if($arEmployee["PERSONAL_ICQ"]):*/?>
                                <li>
                                    <span>ICQ</span>
                                    <span><?=$arEmployee["PERSONAL_ICQ"]?></span>
                                </li>
                            <?/*endif;
                            if($arEmployee["UF_SKYPE"]):*/?>
                                <li>
                                    <span>Skype</span>
                                    <span><?=$arEmployee["UF_SKYPE"]?></span>
                                </li>
                            <?//endif;?>
                        </ul>
                        <button class="square_button employee-data-edit"><span>редактировать</span></button>
                        <?if($arEmployee["UF_ACCESS"] != BX_DEALER_ADMIN):?>
                            <div class="delete">Удалить cотрудника</div>
                        <?endif?>
                    </div>
                </div>
            <?endforeach?>
        </div>
    </div>
</section>
<section class="legal-entities">
    <div class="wrap">
        <div class="grid">
            <div class="col col_2">
                <div class="inner-title">
                    <span class="title">юридические лица</span>
                    <button class="plus-btn entityAdd">добавить юридическое лицо</button>
                </div>

                <form class="company-entity-add" data-mode="entityAdd">
                    <input type="hidden" name="user" value="<?=$arResult["USER_ID"]?>">
                    <input type="hidden" name="dealer" value="<?=$arResult["DEALER_ID"]?>">
                    <span class="close"></span>
                    <div class="item">
                        <span class="text">Название *</span>
                        <label>
                            <input type="text" name="name" required>
                            <span class="ico"></span>
                        </label>
                        <div class="error">Введите название юр. лица</div>
                    </div>
                    <div class="message"></div>
                    <button class="square_button">
                        <span>Добавить юридическое лицо</span>
                    </button>
                </form>
                <div class="table-legal-entities">
                    <?foreach($arResult["ENTITIES"] as $arEntity):?>
                        <div class="tr">
                            <div class="td"><?=$arEntity["NAME"]?></div>
                            <div class="td"><?=$arEntity["ACTIVE"] == "Y" ? "активно" : "не активно"?></div>
                            <div class="td">
                                <input type="checkbox" hidden="hidden" class="radio-check-input" id="111" checked>
                                <label for="111" class="radio-check">Сделать <?=$arEntity["ACTIVE"] == "Y" ? "не активным" : "активным"?></label>
                            </div>
                        </div>
                    <?endforeach?>
                </div>
                <span class="table-legal-entities-btn"></span>
            </div>
            <div class="col col_2">
                <div class="inner-title">
                    <span class="title">доступ к аккаунту</span>
                    <a href="#" class="plus-btn plus-btn plus-btn--pencil">изменить email</a>
                </div>
                <form action="" method="post" id="" class="access-accaunt">
                    <div class="item">
                        <span class="text">старый пароль</span>
                        <input type="password">
                    </div>
                    <div class="item">
                        <span class="text">новый пароль</span>
                        <input type="password">
                    </div>
                    <div class="item item--last">
                        <span class="text">повторите новый пароль</span>
                        <input type="password">
                    </div>
                    <button class="square_button"><span>сохранить новый пароль </span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="unsubscribe">
    <div class="wrap">
        <p class="title">рассылка</p>
        <input type="checkbox" hidden="hidden" class="radio-check-input" id="01" checked>
        <label for="01" class="radio-check">Я хочу отписаться от рассылки</label>
    </div>
</section>
<section class="pages-bottom-square-link">
    <a class="square_button" href="/account/"><span>кабинет</span></a>
</section>