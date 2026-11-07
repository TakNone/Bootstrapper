# inputBusinessIntro

**Description** : *Telegram Business introduction &raquo;*

**Layer** : 233

```tl
inputBusinessIntro#9c469cd flags:# title:string description:string sticker:flags.0?InputDocument = InputBusinessIntro;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	title : '0R6Q1N8Jr4TGauIM',
	description : 'ebMHuzTsjhaNm5no',
	sticker : $client->inputDocumentEmpty(),
);
```