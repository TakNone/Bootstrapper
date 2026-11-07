# updateWebPage

**Description** : *An instant view webpage preview was generated*

**Layer** : 233

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
		id : -7466963703962771851,
		url : 'https://docs.liveproto.dev',
	),
	pts : 61,
	pts_count : 87,
);
```