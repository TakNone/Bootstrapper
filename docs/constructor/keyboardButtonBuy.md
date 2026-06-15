# keyboardButtonBuy

**Description** : *Button to buy a product*

**Layer** : 227

```tl
keyboardButtonBuy#3fa53905 flags:# style:flags.10?KeyboardButtonStyle text:string = KeyboardButton;
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
$keyboardButton = $client->keyboardButtonBuy(
	style : $client->keyboardButtonStyle(
		bg_primary : true,
		bg_danger : true,
		bg_success : true,
		icon : 3944196508600097013,
	),
	text : 'Yau5QFG9o6TqxCSK',
);
```