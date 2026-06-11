# updateWebBrowserException

**Layer** : 227

```tl
updateWebBrowserException#140502d1 flags:# delete:flags.1?true open_external_browser:flags.0?Bool exception:WebDomainException = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **delete** | [`flags.1?true`](type/true) | NOTHING |
| **open_external_browser** | [`flags.0?Bool`](type/Bool) | NOTHING |
| <mark>exception</mark> | [`WebDomainException`](type/WebDomainException) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateWebBrowserException(
	delete : true,
	open_external_browser : false,
	exception : $client->webDomainException(
		domain : '1E38U7iJ2jqlAew9',
		url : 'https://docs.liveproto.dev',
		title : 'h2V468wycFGCL3vi',
		favicon : -7410747816697378309,
	),
);
```