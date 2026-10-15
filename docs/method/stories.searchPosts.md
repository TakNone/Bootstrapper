# stories.searchPosts

**Description** : *Globally search for stories using a hashtag or a location media area, see here &raquo; for more info on the full flow*

**Layer** : 229

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
	hashtag : 'lT0sowyz4vqxVnXm',
	area : $client->mediaAreaVenue(
		coordinates : $client->mediaAreaCoordinates(
			x : -1880203.8671875,
			y : 233496.1064453125,
			w : -624865.697265625,
			h : -2061404.2705078125,
			rotation : 1046396.5244140625,
			radius : -1981364.5419921875,
		),
		geo : $client->geoPointEmpty(),
		title : 'zxml8MkpGJhgUOLD',
		address : 'KSGl1ftyRqni5vVF',
		provider : 'kf4y7ZhAevsCo6xJ',
		venue_id : 'jZ9DPvqzoTxFdf5m',
		venue_type : 'PgcqTCHM90GL8UEw',
	),
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	offset : '4q3RjpfrCVgyJuDE',
	limit : 80,
);
```