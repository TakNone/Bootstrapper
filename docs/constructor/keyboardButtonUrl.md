# keyboardButtonUrl

**Description** : *URL button*

**Layer** : 225

```tl
keyboardButtonUrl#d80c25ec flags:# style:flags.10?KeyboardButtonStyle text:string url:string = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **style** | [`flags.10?KeyboardButtonStyle`](type/KeyboardButtonStyle) | NOTHING |
| <mark>text</mark> | [`string`](type/string) | Button label |
| <mark>url</mark> | [`string`](type/string) | URL |

---

## Type

[KeyboardButton](type/KeyboardButton)

---

## Example

```php
$keyboardButton = $client->keyboardButtonUrl(
	style : $client->keyboardButtonStyle(
		bg_primary : true,
		bg_danger : true,
		bg_success : true,
		icon : 5022682460753613664,
	),
	text : 'zVtmj30TCDMvXdFr',
	url : 'https://docs.liveproto.dev',
);
```