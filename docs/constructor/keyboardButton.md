# keyboardButton

**Description** : *Bot keyboard button*

**Layer** : 233

```tl
keyboardButton#2f67a72f flags:# style:flags.10?KeyboardButtonStyle text:string type:ButtonType = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **style** | [`flags.10?KeyboardButtonStyle`](type/KeyboardButtonStyle) | Button style, see here » for more info on button styles |
| <mark>text</mark> | [`string`](type/string) | Button text |
| <mark>type</mark> | [`ButtonType`](type/ButtonType) | NOTHING |

---

## Type

[KeyboardButton](type/KeyboardButton)

---

## Example

```php
$keyboardButton = $client->keyboardButton(
	style : $client->keyboardButtonStyle(
		bg_primary : true,
		bg_danger : true,
		bg_success : true,
		icon : 3808904906818365019,
	),
	text : 'Hi9UjfbJeXLRcuNv',
	type : $client->buttonTypeDefault(),
);
```