# keyboardButtonUserProfile

**Description** : *Button that links directly to a user profile*

**Layer** : 216

```tl
keyboardButtonUserProfile#308660c1 text:string user_id:long = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`string`](type/string) | Button text |
| <mark>user_id</mark> | [`long`](type/long) | User ID |

---

## Type

[KeyboardButton](type/KeyboardButton)

---

## Example

```php
$keyboardButton = $client->keyboardButtonUserProfile(
	text : 'PwD8ZSoLt26Uryh0',
	user_id : 20402226293242248,
);
```