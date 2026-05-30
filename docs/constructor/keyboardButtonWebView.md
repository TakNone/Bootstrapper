# keyboardButtonWebView

**Description** : *Button to open a bot mini app using messages\.requestWebView, sending over user information after user confirmation*

**Layer** : 225

```tl
keyboardButtonWebView#e846b1a0 flags:# style:flags.10?KeyboardButtonStyle text:string url:string = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **style** | [`flags.10?KeyboardButtonStyle`](type/KeyboardButtonStyle) | NOTHING |
| <mark>text</mark> | [`string`](type/string) | Button text |
| <mark>url</mark> | [`string`](type/string) | Web app url |

---

## Type

[KeyboardButton](type/KeyboardButton)

---

## Example

```php
$keyboardButton = $client->keyboardButtonWebView(
	style : $client->keyboardButtonStyle(
		bg_primary : true,
		bg_danger : true,
		bg_success : true,
		icon : 7555601669625734933,
	),
	text : '4HMSseUrVl7FkAdx',
	url : 'https://docs.liveproto.dev',
);
```