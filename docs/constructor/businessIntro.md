# businessIntro

**Description** : *Telegram Business introduction &raquo;*

**Layer** : 233

```tl
businessIntro#5a0a066d flags:# title:string description:string sticker:flags.0?Document = BusinessIntro;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>title</mark> | [`string`](type/string) | Title of the introduction message (max intro_title_length_limit » UTF-8 characters) |
| <mark>description</mark> | [`string`](type/string) | Profile introduction (max intro_description_length_limit » UTF-8 characters) |
| **sticker** | [`flags.0?Document`](type/Document) | Optional introduction sticker |

---

## Type

[BusinessIntro](type/BusinessIntro)

---

## Example

```php
$businessIntro = $client->businessIntro(
	title : 'Z5A2brC4GoxtcIVk',
	description : '2wokmWGqBO63HN0M',
	sticker : $client->documentEmpty(
		id : -9173381049856080042,
	),
);
```