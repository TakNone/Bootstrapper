# messages.getTheme

**Layer** : 214

```tl
messages.getTheme#8d9d742b format:string theme:InputTheme document_id:long = Theme;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>format</mark> | [`string`](type/string) | NOTHING |
| <mark>theme</mark> | [`InputTheme`](type/InputTheme) | NOTHING |
| <mark>document_id</mark> | [`long`](type/long) | NOTHING |

---

## Result

[Theme](type/Theme)

---

## Example

```php
$theme = $client->messages->getTheme(
	format : 'A6d7TvJVoFBQReMc',
	theme : $client->inputTheme(
		id : -7162097687342562931,
		access_hash : 6002979455769386813,
	),
	document_id : 794168141923065520,
);
```