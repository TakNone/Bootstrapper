# updateBotInlineQuery

**Description** : *An incoming inline query*

**Layer** : 218

```tl
updateBotInlineQuery#496f379c flags:# query_id:long user_id:long query:string geo:flags.0?GeoPoint peer_type:flags.1?InlineQueryPeerType offset:string = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>query_id</mark> | [`long`](type/long) | Query ID |
| <mark>user_id</mark> | [`long`](type/long) | User that sent the query |
| <mark>query</mark> | [`string`](type/string) | Text of query |
| **geo** | [`flags.0?GeoPoint`](type/GeoPoint) | Attached geolocation |
| **peer_type** | [`flags.1?InlineQueryPeerType`](type/InlineQueryPeerType) | Type of the chat from which the inline query was sent |
| <mark>offset</mark> | [`string`](type/string) | Offset to navigate through results |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotInlineQuery(
	query_id : 4830150540470195223,
	user_id : 2633943852779503270,
	query : 'oLYrwERaZFd6ilxy',
	geo : $client->geoPointEmpty(),
	peer_type : $client->inlineQueryPeerTypeSameBotPM(),
	offset : 'P3ziu4kwxZrJS2DL',
);
```