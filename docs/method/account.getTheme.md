# account.getTheme

**Description** : *Get theme information*

**Layer** : 214

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
	format : '3Gr6ukHpftx8ZmqD',
	theme : $client->inputTheme(
		id : -2374305850583689427,
		access_hash : -4715029834929636374,
	),
);
```