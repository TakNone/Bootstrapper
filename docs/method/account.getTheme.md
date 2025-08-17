# account.getTheme

**Description** : *Get theme information*

**Layer** : 211

```tl
account.getTheme#3a5869ec format:string theme:InputTheme = Theme;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>format</mark> | [`string`](type/string) | Theme format, a string that identifies the theming engines supported by the client |
| <mark>theme</mark> | [`InputTheme`](type/InputTheme) | Theme |

---

## Result

[Theme](type/Theme)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **THEME_FORMAT_INVALID** | `400` | Invalid theme format provided |
| **THEME_INVALID** | `400` | Invalid theme provided |

---

## Example

```php
$theme = $client->account->getTheme(
	format : 'SygrVCwNJZtXhdE7',
	theme : $client->inputTheme(
		id : -1265760538327050451,
		access_hash : 6582862291453960790,
	),
);
```