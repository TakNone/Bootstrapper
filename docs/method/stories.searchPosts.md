# stories.searchPosts

**Description** : *Globally search for stories using a hashtag or a location media area, see here &raquo; for more info on the full flow*

**Layer** : 227

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
	hashtag : 'IYKfiQEMcRq4alh1',
	area : $client->mediaAreaVenue(
		coordinates : $client->mediaAreaCoordinates(
			x : -309332.1376953125,
			y : -1567982.310546875,
			w : 195648.876953125,
			h : 414526.7412109375,
			rotation : -666018.5068359375,
			radius : -1258227.048828125,
		),
		geo : $client->geoPointEmpty(),
		title : 'TKPkZo3Nb9JHWqMR',
		address : 'zSn78YLcUAN1ZlTX',
		provider : 'NWtXEQu3bHlZz6Vw',
		venue_id : 'cuWB9XztMLNkCVdq',
		venue_type : 'gPKyrcZuC4AsE3l6',
	),
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	offset : 'jkGLieh37fRl9WB1',
	limit : 99,
);
```