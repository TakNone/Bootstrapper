# inputBusinessIntro

**Description** : *Telegram Business introduction &raquo;*

**Layer** : 218

```tl
inputBusinessIntro#9c469cd flags:# title:string description:string sticker:flags.0?InputDocument = InputBusinessIntro;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>title</mark> | [`string`](type/string) | Title of the introduction message |
| <mark>description</mark> | [`string`](type/string) | Profile introduction |
| **sticker** | [`flags.0?InputDocument`](type/InputDocument) | Optional introduction sticker |

---

## Type

[InputBusinessIntro](type/InputBusinessIntro)

---

## Example

```php
$inputBusinessIntro = $client->inputBusinessIntro(
	title : 'bom6iQxRzIwE1lgD',
	description : '5X7gDm8dBUR6wpiE',
	sticker : $client->inputDocumentEmpty(),
);
```