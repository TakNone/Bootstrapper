# stories.searchPosts

**Description** : *Globally search for stories using a hashtag or a location media area, see here &raquo; for more info on the full flow*

**Layer** : 214

```tl
stories.searchPosts#d1810907 flags:# hashtag:flags.0?string area:flags.1?MediaArea peer:flags.2?InputPeer offset:string limit:int = stories.FoundStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	hashtag : 'eqgbyo0j8vORhYuA',
	area : $client->mediaAreaVenue(
		coordinates : $client->mediaAreaCoordinates(
			x : -582580.0791015625,
			y : 1224006.8486328125,
			w : 1801244.7861328125,
			h : -533297.1416015625,
			rotation : -1801548.712890625,
			radius : -1937720.4990234375,
		),
		geo : $client->geoPointEmpty(),
		title : 'H3jq86VJbRT2Q0GK',
		address : 'Wj0Ara7u5C94iGyQ',
		provider : 'oyVj3MbzlH7rmZYT',
		venue_id : 'ERV5bp9tweTkYCXG',
		venue_type : '5QZrEHtbBJh0TIpg',
	),
	peer : $client->inputPeerEmpty(),
	offset : 'ywzUr08QmKSok2Cb',
	limit : 53,
);
```