# messages.toggleDialogFilterTags

**Description** : *Enable or disable folder tags »*

**Layer** : 211

```tl
messages.toggleDialogFilterTags#fd2dda49 enabled:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>enabled</mark> | [`Bool`](type/Bool) | Enable or disable folder tags |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |

---

## Example

```php
$bool = $client->messages->toggleDialogFilterTags(
	enabled : $client->boolFalse(),
);
```