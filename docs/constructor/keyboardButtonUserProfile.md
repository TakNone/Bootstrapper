# keyboardButtonUserProfile

**Description** : *Button that links directly to a user profile*

**Layer** : 225

```tl
keyboardButtonUserProfile#c0fd5d09 flags:# style:flags.10?KeyboardButtonStyle text:string user_id:long = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **style** | [`flags.10?KeyboardButtonStyle`](type/KeyboardButtonStyle) | NOTHING |
| <mark>text</mark> | [`string`](type/string) | Button text |
| <mark>user_id</mark> | [`long`](type/long) | User ID |

---

## Type

[KeyboardButton](type/KeyboardButton)

---

## Example

```php
$keyboardButton = $client->keyboardButtonUserProfile(
	style : $client->keyboardButtonStyle(
		bg_primary : true,
		bg_danger : true,
		bg_success : true,
		icon : -6138819090441836626,
	),
	text : 'OeafDGBLqvURjNh6',
	user_id : 9101478280135286027,
);
```