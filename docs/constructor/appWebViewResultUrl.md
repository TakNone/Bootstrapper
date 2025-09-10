# appWebViewResultUrl

**Description** : *Contains the link that must be used to open a direct link Mini App*

**Layer** : 214

```tl
appWebViewResultUrl#3c1b4f0d url:string = AppWebViewResultUrl;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | The URL to open |

---

## Type

[AppWebViewResultUrl](type/AppWebViewResultUrl)

---

## Example

```php
$appWebViewResultUrl = $client->appWebViewResultUrl(
	url : 'https://docs.liveproto.dev',
);
```