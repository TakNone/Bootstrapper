# businessIntro

**Description** : *Telegram Business introduction &raquo;*

**Layer** : 211

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
	title : 'MdXE1cTrhYNViPmn',
	description : 'gzU7jZa852AJrdHO',
	sticker : $client->documentEmpty(
		id : 2061465486387572384,
	),
);
```