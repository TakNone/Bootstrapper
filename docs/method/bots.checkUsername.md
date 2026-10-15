# bots.checkUsername

**Description** : *Check whether a username is available and valid for use when creating a managed bot &raquo;*

**Layer** : 229

```tl
bots.checkUsername#87f2219b username:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>username</mark> | [`string`](type/string) | Username to check; only letters, digits and underscores are allowed, must end in bot, and the full username must be 5–32 characters long |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **USERNAME_INVALID** | `400` | The provided username is not valid |
| **USERNAME_OCCUPIED** | `400` | The provided username is already occupied |
| **USERNAME_SUFFIX_MISSING** | `400` | The required bot suffix is missing from the passed username |

---

## Example

```php
$bool = $client->bots->checkUsername(
	username : 'TakNone',
);
```