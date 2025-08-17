# help.getUserInfo

**Description** : *Can only be used by TSF members to obtain internal information*

**Layer** : 211

```tl
help.getUserInfo#38a08d3 user_id:InputUser = help.UserInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | User ID |

---

## Result

[help.UserInfo](type/help.UserInfo)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **USER_INVALID** | `403` | Invalid user provided |

---

## Example

```php
$helpUserInfo = $client->help->getUserInfo(
	user_id : $client->inputUserEmpty(),
);
```