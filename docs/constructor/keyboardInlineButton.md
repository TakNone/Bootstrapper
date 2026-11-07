# keyboardInlineButton

**Layer** : 233

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
		icon : 2007642805608240434,
	),
	text : 'rMRlvNf5t7L3HP8F',
	type : $client->inlineButtonTypeUrl(
		url : 'https://docs.liveproto.dev',
	),
);
```