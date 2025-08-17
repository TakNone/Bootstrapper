# keyboardButtonWebView

**Description** : *Button to open a bot mini app using messages.requestWebView, sending over user information after user confirmation*

**Layer** : 211

```tl
keyboardButtonWebView#13767230 text:string url:string = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`string`](type/string) | Button text |
| <mark>url</mark> | [`string`](type/string) | Web app url |

---

## Type

[KeyboardButton](type/KeyboardButton)

---

## Example

```php
$keyboardButton = $client->keyboardButtonWebView(
	text : 'ucQ7eiI0kmTjzfUy',
	url : 'https://docs.liveproto.dev',
);
```