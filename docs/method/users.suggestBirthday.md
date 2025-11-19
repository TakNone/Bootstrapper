# users.suggestBirthday

**Layer** : 218

```tl
users.suggestBirthday#fc533372 id:InputUser birthday:Birthday = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputUser`](type/InputUser) | NOTHING |
| <mark>birthday</mark> | [`Birthday`](type/Birthday) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->users->suggestBirthday(
	id : $client->get_input_user(peer : '@TakNone'),
	birthday : $client->birthday(
		day : 64,
		month : 95,
		year : 42,
	),
);
```