# stories.searchPosts

**Description** : *Globally search for stories using a hashtag or a location media area, see here &raquo; for more info on the full flow*

**Layer** : 225

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
	hashtag : 'bzsPGqY1DcnR8rEH',
	area : $client->mediaAreaVenue(
		coordinates : $client->mediaAreaCoordinates(
			x : 1383603.7822265625,
			y : 1161461.1982421875,
			w : 124959.4287109375,
			h : 1527713.314453125,
			rotation : -835325.693359375,
			radius : -912859.9423828125,
		),
		geo : $client->geoPointEmpty(),
		title : 'Nh5yHAFT2pDk3oMj',
		address : '2t6K4LBf5Wie7ZnP',
		provider : 'rym0KP4spLwUXcJb',
		venue_id : '8GtXgzC3evu4qj07',
		venue_type : 'OAZe3dbHj2zTnG1F',
	),
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	offset : 'JBbsF3lQ1otnUN9i',
	limit : 10,
);
```