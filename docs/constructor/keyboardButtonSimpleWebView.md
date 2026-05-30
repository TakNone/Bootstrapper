# keyboardButtonSimpleWebView

**Description** : *Button to open a bot mini app using messages\.requestSimpleWebView, without sending user information to the web app*

**Layer** : 222

```tl
keyboardButtonSimpleWebView#e15c4370 flags:# style:flags.10?KeyboardButtonStyle text:string url:string = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **style** | [`flags.10?KeyboardButtonStyle`](type/KeyboardButtonStyle) | NOTHING |
| <mark>text</mark> | [`string`](type/string) | Button text |
| <mark>url</mark> | [`string`](type/string) | Web app URL |

---

## Type

[KeyboardButton](type/KeyboardButton)

---

## Example

```php
$keyboardButton = $client->keyboardButtonSimpleWebView(
	style : $client->keyboardButtonStyle(
		bg_primary : true,
		bg_danger : true,
		bg_success : true,
		icon : -2704809026718929756,
	),
	text : 'VZ9WgDM6PiEIFYRx',
	url : 'https://docs.liveproto.dev',
);
```