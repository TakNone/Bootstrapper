# keyboardButtonUserProfile

**Description** : *Button that links directly to a user profile*

**Layer** : 227

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
		icon : -2692959997484319254,
	),
	text : 'lqgjLUsOa7Dm1fZ5',
	user_id : -7377032445343034657,
);
```