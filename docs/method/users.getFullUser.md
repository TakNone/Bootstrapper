# users.getFullUser

**Description** : *Returns extended user info by ID*

**Layer** : 211

```tl
users.getFullUser#b60f5918 id:InputUser = users.UserFull;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputUser`](type/InputUser) | User ID |

---

## Result

[users.UserFull](type/users.UserFull)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **USERNAME_OCCUPIED** | `400` | The provided username is already occupied |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$usersUserFull = $client->users->getFullUser(
	id : $client->inputUserEmpty(),
);
```