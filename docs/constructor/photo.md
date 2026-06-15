# photo

**Description** : *Photo*

**Layer** : 227

```tl
photo#fb197a65 flags:# has_stickers:flags.0?true id:long access_hash:long file_reference:bytes date:int sizes:Vector<PhotoSize> video_sizes:flags.1?Vector<VideoSize> dc_id:int = Photo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **has_stickers** | [`flags.0?true`](type/true) | Whether the photo has mask stickers attached to it |
| <mark>id</mark> | [`long`](type/long) | ID |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash |
| <mark>file_reference</mark> | [`bytes`](type/bytes) | file reference |
| <mark>date</mark> | [`int`](type/int) | Date of upload |
| <mark>sizes</mark> | [`Vector<PhotoSize>`](type/PhotoSize) | Available sizes for download |
| **video_sizes** | [`flags.1?Vector<VideoSize>`](type/VideoSize) | For animated profiles, the MPEG4 videos |
| <mark>dc_id</mark> | [`int`](type/int) | DC ID to use for download |

---

## Type

[Photo](type/Photo)

---

## Example

```php
$photo = $client->photo(
	has_stickers : true,
	id : -5653578891507092551,
	access_hash : -6829458408664428823,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 82,
	sizes : array(
		$client->photoSizeEmpty(
			type : 'dty1pSiBCxTP5g7F',
		),
		$client->photoSize(
			type : '25hbnjS39dkA7p6O',
			w : 79,
			h : 74,
			size : 78,
		),
		$client->photoCachedSize(
			type : 'ARKHLlmoMeu9hp56',
			w : 47,
			h : 93,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoStrippedSize(
			type : 'CdFiGfzBx4RM1c7o',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->photoSizeProgressive(
			type : '8S5nRC1YHUkt7gN0',
			w : 33,
			h : 50,
			sizes : array(91),
		),
		$client->photoPathSize(
			type : 'NShIWq5YAfBFyEHM',
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_sizes : array(
		$client->videoSize(
			type : 'duwPObxafBVot79s',
			w : 23,
			h : 78,
			size : 66,
			video_start_ts : -1734021.7177734375,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : -3606280708872360018,
			background_colors : array(42),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : -3911503201847465252,
			background_colors : array(48),
		),
	),
	dc_id : 97,
);
```