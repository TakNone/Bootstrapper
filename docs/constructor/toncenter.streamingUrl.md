# toncenter.streamingUrl

**Layer** : 233

```tl
toncenter.streamingUrl#19887601 url:string expires:int = toncenter.StreamingUrl;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | NOTHING |
| <mark>expires</mark> | [`int`](type/int) | NOTHING |

---

## Type

[toncenter.StreamingUrl](type/toncenter.StreamingUrl)

---

## Example

```php
$toncenterStreamingUrl = $client->toncenter->streamingUrl(
	url : 'https://docs.liveproto.dev',
	expires : 17,
);
```