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
	hashtag : 'f3dkhn8HtO69YX2L',
	area : $client->mediaAreaVenue(
		coordinates : $client->mediaAreaCoordinates(
			x : 162099.8759765625,
			y : -1789268.26953125,
			w : -2043270.1376953125,
			h : -1170386.8564453125,
			rotation : 667951.0068359375,
			radius : -1264219.2958984375,
		),
		geo : $client->geoPointEmpty(),
		title : '6eYsC1FWZgi3ExDK',
		address : 'PKMbTp72r6DklaL5',
		provider : 'SgZs8GuCAoQIPce5',
		venue_id : 'zCKLexuvGdHcrsjt',
		venue_type : '9am1qu4VIpBOUlrd',
	),
	peer : $client->inputPeerEmpty(),
	offset : 'BOEZ2qp1rTx4Hy5I',
	limit : 25,
);
```