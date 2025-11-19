# businessIntro

**Description** : *Telegram Business introduction &raquo;*

**Layer** : 218

```tl
businessIntro#5a0a066d flags:# title:string description:string sticker:flags.0?Document = BusinessIntro;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	title : 'OERhFl0fedYpct4C',
	description : 'pCAywJHQNZGLV96n',
	sticker : $client->documentEmpty(
		id : -397171628989463165,
	),
);
```