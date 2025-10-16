# inputBotAppShortName

**Description** : *Used to fetch information about a direct link Mini App by its short name*

**Layer** : 216

```tl
inputBotAppShortName#908c0407 bot_id:InputUser short_name:string = InputBotApp;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot_id</mark> | [`InputUser`](type/InputUser) | ID of the bot that owns the bot mini app |
| <mark>short_name</mark> | [`string`](type/string) | Short name, obtained from a Direct Mini App deep link |

---

## Type

[InputBotApp](type/InputBotApp)

---

## Example

```php
$inputBotApp = $client->inputBotAppShortName(
	bot_id : $client->inputUserEmpty(),
	short_name : 'cw0B63Ql2n9ek5ij',
);
```