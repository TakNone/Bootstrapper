# users.suggestBirthday

**Description** : *Suggest a birthday to another user, see here &raquo; for more info on birthdays in the API*

**Layer** : 233

```tl
users.suggestBirthday#fc533372 id:InputUser birthday:Birthday = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputUser`](type/InputUser) | The user that will receive the suggested birthday date |
| <mark>birthday</mark> | [`Birthday`](type/Birthday) | The birthday to suggest |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BIRTHDAY_ALREADY** | `400` | The target user already has a birthday set |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$updates = $client->users->suggestBirthday(
	id : $client->get_input_user(user : '@TakNone'),
	birthday : $client->birthday(
		day : 78,
		month : 35,
		year : 85,
	),
);
```