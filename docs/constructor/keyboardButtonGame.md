# keyboardButtonGame

**Description** : *Button to start a game*

**Layer** : 222

```tl
keyboardButtonGame#89c590f9 flags:# style:flags.10?KeyboardButtonStyle text:string = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **style** | [`flags.10?KeyboardButtonStyle`](type/KeyboardButtonStyle) | NOTHING |
| <mark>text</mark> | [`string`](type/string) | Button text |

---

## Type

[KeyboardButton](type/KeyboardButton)

---

## Example

```php
$keyboardButton = $client->keyboardButtonGame(
	style : $client->keyboardButtonStyle(
		bg_primary : true,
		bg_danger : true,
		bg_success : true,
		icon : -2909162101441085100,
	),
	text : 'jFtEw09yLB4qpi2c',
);
```