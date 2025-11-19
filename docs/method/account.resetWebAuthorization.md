# account.resetWebAuthorization

**Description** : *Log out an active web telegram login session*

**Layer** : 218

```tl
account.resetWebAuthorization#2d01b9ef hash:long = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Session hash |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **HASH_INVALID** | `400` | The provided hash is invalid |

---

## Example

```php
$bool = $client->account->resetWebAuthorization(
	hash : 0,
);
```