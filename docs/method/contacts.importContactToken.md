# contacts.importContactToken

**Description** : *Obtain user info from a temporary profile link*

**Layer** : 211

```tl
contacts.importContactToken#13005788 token:string = User;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>token</mark> | [`string`](type/string) | The token extracted from the temporary profile link |

---

## Result

[User](type/User)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **IMPORT_TOKEN_INVALID** | `400` | The specified token is invalid |

---

## Example

```php
$user = $client->contacts->importContactToken(
	token : 'D9UbFh31ZnfIXRMj',
);
```