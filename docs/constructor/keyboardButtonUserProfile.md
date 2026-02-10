# keyboardButtonUserProfile

**Description** : *Button that links directly to a user profile*

**Layer** : 222

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
		icon : 6914575317370871743,
	),
	text : 'GlqBFe0Wu85P3tpi',
	user_id : -3219286203690699920,
);
```