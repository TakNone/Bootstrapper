# keyboardButtonUrl

**Description** : *URL button*

**Layer** : 218

```tl
keyboardButtonUrl#258aff05 text:string url:string = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`string`](type/string) | Button label |
| <mark>url</mark> | [`string`](type/string) | URL |

---

## Type

[KeyboardButton](type/KeyboardButton)

---

## Example

```php
$keyboardButton = $client->keyboardButtonUrl(
	text : 'JBRkYq62ubPSDeTz',
	url : 'https://docs.liveproto.dev',
);
```