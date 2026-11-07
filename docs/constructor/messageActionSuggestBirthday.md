# messageActionSuggestBirthday

**Description** : *A new birthday was suggested using users\.suggestBirthday, see here &raquo; for more info on birthdays in the API*

**Layer** : 229

```tl
messageActionSuggestBirthday#2c8f2a25 birthday:Birthday = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>birthday</mark> | [`Birthday`](type/Birthday) | The suggested birthday |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionSuggestBirthday(
	birthday : $client->birthday(
		day : 99,
		month : 58,
		year : 26,
	),
);
```