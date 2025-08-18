# updateWebPage

**Description** : *An instant view webpage preview was generated*

**Layer** : 211

```tl
updateWebPage#7f891213 webpage:WebPage pts:int pts_count:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>webpage</mark> | [`WebPage`](type/WebPage) | Webpage preview |
| <mark>pts</mark> | [`int`](type/int) | Event count after generation |
| <mark>pts_count</mark> | [`int`](type/int) | Number of events that were generated |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateWebPage(
	webpage : $client->webPageEmpty(
		id : -2498565525498745000,
		url : 'https://docs.liveproto.dev',
	),
	pts : 8,
	pts_count : 40,
);
```