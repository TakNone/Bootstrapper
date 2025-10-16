# account.updateBirthday

**Description** : *Update our birthday, see here &raquo; for more info*

**Layer** : 216

```tl
account.updateBirthday#cc6e0c11 flags:# birthday:flags.0?Birthday = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **birthday** | [`flags.0?Birthday`](type/Birthday) | Birthday |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BIRTHDAY_INVALID** | `400` | An invalid age was specified, must be between 0 and 150 years |

---

## Example

```php
$bool = $client->account->updateBirthday(
	birthday : $client->birthday(
		day : 19,
		month : 40,
		year : 47,
	),
);
```