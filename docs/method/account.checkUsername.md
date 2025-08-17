# account.checkUsername

**Description** : *Validates a username and checks availability*

**Layer** : 211

```tl
account.checkUsername#2714d86c username:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>username</mark> | [`string`](type/string) | usernameAccepted characters: A-z (case-insensitive), 0-9 and underscores.Length: 5-32 characters |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **USERNAME_INVALID** | `400` | The provided username is not valid |
| **USERNAME_OCCUPIED** | `400` | The provided username is already occupied |
| **USERNAME_PURCHASE_AVAILABLE** | `400` | The specified username can be purchased on https://fragment.com |

---

## Example

```php
$bool = $client->account->checkUsername(
	username : 'TakNone',
);
```