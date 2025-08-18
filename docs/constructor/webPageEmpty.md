# webPageEmpty

**Description** : *No preview is available for the webpage*

**Layer** : 211

```tl
webPageEmpty#211a1788 flags:# id:long url:flags.0?string = WebPage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`long`](type/long) | Preview ID |
| **url** | [`flags.0?string`](type/string) | URL of the webpage |

---

## Type

[WebPage](type/WebPage)

---

## Example

```php
$webPage = $client->webPageEmpty(
	id : 6221033713143526231,
	url : 'https://docs.liveproto.dev',
);
```