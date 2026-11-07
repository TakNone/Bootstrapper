# keyboardInlineButton

**Layer** : 229

```tl
keyboardInlineButton#11c1a322 flags:# style:flags.10?KeyboardButtonStyle text:string type:InlineButtonType = KeyboardInlineButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **style** | [`flags.10?KeyboardButtonStyle`](type/KeyboardButtonStyle) | NOTHING |
| <mark>text</mark> | [`string`](type/string) | NOTHING |
| <mark>type</mark> | [`InlineButtonType`](type/InlineButtonType) | NOTHING |

---

## Type

[KeyboardInlineButton](type/KeyboardInlineButton)

---

## Example

```php
$keyboardInlineButton = $client->keyboardInlineButton(
	style : $client->keyboardButtonStyle(
		bg_primary : true,
		bg_danger : true,
		bg_success : true,
		icon : -2633283361046247079,
	),
	text : 'ex4KEmC7QB6qURJo',
	type : $client->inlineButtonTypeUrl(
		url : 'https://docs.liveproto.dev',
	),
);
```