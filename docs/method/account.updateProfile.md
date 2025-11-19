# account.updateProfile

**Description** : *Updates user profile*

**Layer** : 218

```tl
account.updateProfile#78515775 flags:# first_name:flags.0?string last_name:flags.1?string about:flags.2?string = User;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **first_name** | [`flags.0?string`](type/string) | New user first name |
| **last_name** | [`flags.1?string`](type/string) | New user last name |
| **about** | [`flags.2?string`](type/string) | New bio |

---

## Result

[User](type/User)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ABOUT_TOO_LONG** | `400` | About string too long |
| **BUSINESS_CONNECTION_INVALID** | `400` | The connection_id passed to the wrapping invokeWithBusinessConnection call is invalid |
| **FIRSTNAME_INVALID** | `400` | The first name is invalid |

---

## Example

```php
$user = $client->account->updateProfile(
	first_name : 'Tak',
	last_name : 'None',
	about : '179nI0ptm6iJxTgy',
);
```