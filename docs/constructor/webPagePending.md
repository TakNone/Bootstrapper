# webPagePending

**Description** : *A preview of the webpage is currently being generated*

**Layer** : 222

```tl
webPagePending#b0d13e47 flags:# id:long url:flags.0?string date:int = WebPage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`long`](type/long) | ID of preview |
| **url** | [`flags.0?string`](type/string) | URL of the webpage |
| <mark>date</mark> | [`int`](type/int) | When was the processing started |

---

## Type

[WebPage](type/WebPage)

---

## Example

```php
$webPage = $client->webPagePending(
	id : 4683481354880640694,
	url : 'https://docs.liveproto.dev',
	date : 35,
);
```