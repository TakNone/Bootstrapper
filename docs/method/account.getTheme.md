# account.getTheme

**Description** : *Get theme information*

**Layer** : 227

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
| **THEME_SLUG_INVALID** | `400` | The specified theme slug is invalid |

---

## Example

```php
$theme = $client->account->getTheme(
	format : '9zx1AHhnFfD50oGk',
	theme : $client->inputTheme(
		id : 3472022063723737366,
		access_hash : 5353337680075546943,
	),
);
```