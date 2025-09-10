# messages.installTheme

**Layer** : 214

```tl
messages.installTheme#7ae43737 flags:# dark:flags.0?true format:flags.1?string theme:flags.1?InputTheme = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **dark** | [`flags.0?true`](type/true) | NOTHING |
| **format** | [`flags.1?string`](type/string) | NOTHING |
| **theme** | [`flags.1?InputTheme`](type/InputTheme) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->installTheme(
	dark : true,
	format : 'etELV6RGxhokfNYJ',
	theme : $client->inputTheme(
		id : -8567322985407601882,
		access_hash : -3214045658740301818,
	),
);
```