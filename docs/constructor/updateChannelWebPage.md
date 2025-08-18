# updateChannelWebPage

**Description** : *A webpage preview of a link in a channel/supergroup message was generated*

**Layer** : 211

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
	channel_id : -7489498935108516400,
	webpage : $client->webPageEmpty(
		id : 4468170932654097276,
		url : 'https://docs.liveproto.dev',
	),
	pts : 26,
	pts_count : 100,
);
```