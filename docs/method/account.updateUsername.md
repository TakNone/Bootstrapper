# account.updateUsername

**Description** : *Changes username for the current user*

**Layer** : 211

```tl
account.updateUsername#3e0bdd7c username:string = User;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>username</mark> | [`string`](type/string) | username or empty string if username is to be removedAccepted characters: a-z (case-insensitive), 0-9 and underscores.Length: 5-32 characters |

---

## Result

[User](type/User)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **USERNAME_INVALID** | `400` | The provided username is not valid |
| **USERNAME_NOT_MODIFIED** | `400` | The username was not modified |
| **USERNAME_OCCUPIED** | `400` | The provided username is already occupied |
| **USERNAME_PURCHASE_AVAILABLE** | `400` | The specified username can be purchased on https://fragment.com |

---

## Example

```php
$user = $client->account->updateUsername(
	username : 'TakNone',
);
```