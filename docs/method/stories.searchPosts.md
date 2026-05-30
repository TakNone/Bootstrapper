# stories.searchPosts

**Description** : *Globally search for stories using a hashtag or a location media area, see here &raquo; for more info on the full flow*

**Layer** : 222

```tl
stories.searchPosts#d1810907 flags:# hashtag:flags.0?string area:flags.1?MediaArea peer:flags.2?InputPeer offset:string limit:int = stories.FoundStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **hashtag** | [`flags.0?string`](type/string) | Hashtag (without the #) |
| **area** | [`flags.1?MediaArea`](type/MediaArea) | A mediaAreaGeoPoint or a mediaAreaVenue.  Note mediaAreaGeoPoint areas may be searched only if they have an associated address |
| **peer** | [`flags.2?InputPeer`](type/InputPeer) | If set, returns only stories posted by this peer |
| <mark>offset</mark> | [`string`](type/string) | Offset for pagination: initially an empty string, then the next_offset from the previously returned stories.foundStories |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[stories.FoundStories](type/stories.FoundStories)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **HASHTAG_INVALID** | `400` | The specified hashtag is invalid |

---

## Example

```php
$storiesFoundStories = $client->stories->searchPosts(
	hashtag : 'Ol7XEWbSVNmMT4dt',
	area : $client->mediaAreaVenue(
		coordinates : $client->mediaAreaCoordinates(
			x : 537837.8359375,
			y : -76490.615234375,
			w : -99574.646484375,
			h : 795355.20703125,
			rotation : -1282732.2158203125,
			radius : -1180541.70703125,
		),
		geo : $client->geoPointEmpty(),
		title : 'v2kH7J5Gr8pQzlxC',
		address : 'oCaZRYXlW5834hJH',
		provider : 'QO5oTPp2J4UeBcdX',
		venue_id : 'rETz4Suyocafmj6G',
		venue_type : 'iroCdfgKHBXsQ9OI',
	),
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	offset : '4pSxCeZGb95Qh8Vn',
	limit : 13,
);
```