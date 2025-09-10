# account.saveTheme

**Description** : *Save a theme*

**Layer** : 214

```tl
account.saveTheme#f257106c theme:InputTheme unsave:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>theme</mark> | [`InputTheme`](type/InputTheme) | Theme to save |
| <mark>unsave</mark> | [`Bool`](type/Bool) | Unsave |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **THEME_INVALID** | `400` | Invalid theme provided |

---

## Example

```php
$bool = $client->account->saveTheme(
	theme : $client->inputTheme(
		id : -1164777629124647585,
		access_hash : -8298839964847801874,
	),
	unsave : false,
);
```