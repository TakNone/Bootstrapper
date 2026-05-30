# keyboardButtonRequestGeoLocation

**Description** : *Button to request a user&#039;s geolocation*

**Layer** : 222

```tl
keyboardButtonRequestGeoLocation#aa40f94d flags:# style:flags.10?KeyboardButtonStyle text:string = KeyboardButton;
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
$keyboardButton = $client->keyboardButtonRequestGeoLocation(
	style : $client->keyboardButtonStyle(
		bg_primary : true,
		bg_danger : true,
		bg_success : true,
		icon : 8338573438562716712,
	),
	text : 'oAqdGzlPTcjfiveE',
);
```