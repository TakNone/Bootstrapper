# inlineBotWebView

**Description** : *Specifies an inline mode mini app button, shown on top of the inline query results list*

**Layer** : 216

```tl
inlineBotWebView#b57295d5 text:string url:string = InlineBotWebView;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`string`](type/string) | Text of the button |
| <mark>url</mark> | [`string`](type/string) | Webapp URL |

---

## Type

[InlineBotWebView](type/InlineBotWebView)

---

## Example

```php
$inlineBotWebView = $client->inlineBotWebView(
	text : 'Buj7f1zHNxF20SX5',
	url : 'https://docs.liveproto.dev',
);
```