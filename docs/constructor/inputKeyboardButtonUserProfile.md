# inputKeyboardButtonUserProfile

**Description** : *Button that links directly to a user profile*

**Layer** : 227

```tl
inputKeyboardButtonUserProfile#7d5e07c7 flags:# style:flags.10?KeyboardButtonStyle text:string user_id:InputUser = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **style** | [`flags.10?KeyboardButtonStyle`](type/KeyboardButtonStyle) | NOTHING |
| <mark>text</mark> | [`string`](type/string) | Button text |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | User ID |

---

## Type

[KeyboardButton](type/KeyboardButton)

---

## Example

```php
$keyboardButton = $client->inputKeyboardButtonUserProfile(
	style : $client->keyboardButtonStyle(
		bg_primary : true,
		bg_danger : true,
		bg_success : true,
		icon : 3632941391983081336,
	),
	text : 'TLvy89Bl5uEhKsF7',
	user_id : $client->get_input_user(user : '@TakNone'),
);
```