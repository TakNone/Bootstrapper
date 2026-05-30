# businessIntro

**Description** : *Telegram Business introduction &raquo;*

**Layer** : 222

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
	title : 'jcxd18BTSP3CYlAy',
	description : 'Kqo1bj50OH7VkxcD',
	sticker : $client->documentEmpty(
		id : -2971315429939653882,
	),
);
```