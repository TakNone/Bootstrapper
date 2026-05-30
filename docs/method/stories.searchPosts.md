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
	hashtag : '7rDPepfcyikdnG1H',
	area : $client->mediaAreaVenue(
		coordinates : $client->mediaAreaCoordinates(
			x : -1654181.27734375,
			y : -374131.140625,
			w : 260012.1884765625,
			h : -1782802.2900390625,
			rotation : -298097.92578125,
			radius : -1351148.689453125,
		),
		geo : $client->geoPointEmpty(),
		title : '8Y1mToGM3L26XN9h',
		address : 'CkW0bc4VOf1tEGhB',
		provider : '7t2i0OXSTnQclVwC',
		venue_id : 'iNDjZ0SnQlVGm4AC',
		venue_type : 'gKQrMRmG29u7tqXx',
	),
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	offset : 'X4v7VtYBlSO3czCQ',
	limit : 54,
);
```