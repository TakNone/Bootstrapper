# keyboardButtonUserProfile

**Description** : *Button that links directly to a user profile*

**Layer** : 214

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
	text : 'sDrbCLf92dEIpZg5',
	user_id : 1769173993060100782,
);
```