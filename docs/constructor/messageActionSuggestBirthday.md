# messageActionSuggestBirthday

**Layer** : 218

```tl
messageActionSuggestBirthday#2c8f2a25 birthday:Birthday = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>birthday</mark> | [`Birthday`](type/Birthday) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionSuggestBirthday(
	birthday : $client->birthday(
		day : 28,
		month : 27,
		year : 55,
	),
);
```