# Модуль Joomla 3 VirtueMart 3 для Украины

## Установка:

* В админ панеле перейдите в Extensions → Manage → Install.

* Выберите архив с модулем в "Upload Package File" и нажмите "Upload & Install". Появится сообщение "Installation of the plugin was successful".

* Перейдите в Manage. В фильтре укажите слово "Platon" и нажмите "Search", появится отфильтрованный модуль.

* Нажмите на картинку с красным кругом и плюсом под "Status". Появится сообщение "1 extension successfully enabled."

* Перейдите в  VirtueMart → Payment Methods. Нажмите кнопку "New". Появится форма.

* Заполните "Payment Name" и "Sef Alias" указав значение "Platon". Выберите "Platon" из списка "Payment Method". Пока не переводите "Published" в значение "Yes". Нажмите кнопку "Save". Появится сообщение "Payment Method successfully saved".

* Перейдите в раздел "Configuration" на этой же странице. Введите ключ и пароль.

* Вернитесь в "Payment Method Information" и укажите "Published" в значение "Yes". Нажмите "Save". Появится сообщение "Payment Method successfully saved".

## Ссылка для коллбеков:
https://ВАШ_САЙТ/index.php?option=com_virtuemart&view=pluginresponse&task=pluginnotification&tmpl=component

## Тестирование:
В целях тестирования используйте наши тестовые реквизиты.

| Номер карты  | Месяц / Год | CVV2 | Описание результата |
| :---:  | :---:  | :---:  | --- |
| 4111  1111  1111  1111 | 02 / 2022 | Любые три цифры | Не успешная оплата без 3DS проверки |
| 4111  1111  1111  1111 | 06 / 2022 | Любые три цифры | Не успешная оплата с 3DS проверкой |
| 4111  1111  1111  1111 | 01 / 2022 | Любые три цифры | Успешная оплата без 3DS проверки |
| 4111  1111  1111  1111 | 05 / 2022 | Любые три цифры | Успешная оплата с 3DS проверкой |
