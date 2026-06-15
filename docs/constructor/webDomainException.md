# webDomainException

**Layer** : 227

```tl
webDomainException#933ca597 flags:# domain:string url:string title:string favicon:flags.0?long = WebDomainException;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>domain</mark> | [`string`](type/string) | NOTHING |
| <mark>url</mark> | [`string`](type/string) | NOTHING |
| <mark>title</mark> | [`string`](type/string) | NOTHING |
| **favicon** | [`flags.0?long`](type/long) | NOTHING |

---

## Type

[WebDomainException](type/WebDomainException)

---

## Example

```php
$webDomainException = $client->webDomainException(
	domain : 'KDsNr7bY02RjWeGS',
	url : 'https://docs.liveproto.dev',
	title : 'hdYg7TELVotlrZz2',
	favicon : 8828761571226739655,
);
```