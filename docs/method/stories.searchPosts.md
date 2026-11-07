# stories.searchPosts

**Description** : *Globally search for stories using a hashtag or a location media area, see here &raquo; for more info on the full flow*

**Layer** : 233

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
	hashtag : 'N5Vm9U0MzE6lAaIp',
	area : $client->mediaAreaVenue(
		coordinates : $client->mediaAreaCoordinates(
			x : -917568.5771484375,
			y : 2042452.96875,
			w : 907891.2314453125,
			h : -1724043.0771484375,
			rotation : 1851316.8798828125,
			radius : -101249.54296875,
		),
		geo : $client->geoPointEmpty(),
		title : 'HSvkuQIJidLxzy0w',
		address : 'yCToijRshM9tWQa6',
		provider : 'yW9g1vetc27C8IJT',
		venue_id : 'JA3lWEiatGkQ9Myr',
		venue_type : 'N6kSFbvXWKgMrYEH',
	),
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	offset : 'myjcru7Mw1lGiEU3',
	limit : 92,
);
```