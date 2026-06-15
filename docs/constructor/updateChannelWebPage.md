# updateChannelWebPage

**Description** : *A webpage preview of a link in a channel/supergroup message was generated*

**Layer** : 227

```tl
updateChannelWebPage#2f2ba99f channel_id:long webpage:WebPage pts:int pts_count:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel_id</mark> | [`long`](type/long) | Channel/supergroup ID |
| <mark>webpage</mark> | [`WebPage`](type/WebPage) | Generated webpage preview |
| <mark>pts</mark> | [`int`](type/int) | Event count after generation |
| <mark>pts_count</mark> | [`int`](type/int) | Number of events that were generated |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChannelWebPage(
	channel_id : 2290960164148611841,
	webpage : $client->webPageEmpty(
		id : 6938642768950184542,
		url : 'https://docs.liveproto.dev',
	),
	pts : 23,
	pts_count : 14,
);
```