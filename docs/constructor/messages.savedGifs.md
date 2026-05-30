# messages.savedGifs

**Description** : *Saved gifs*

**Layer** : 225

```tl
messages.savedGifs#84a02a0d hash:long gifs:Vector<Document> = messages.SavedGifs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>gifs</mark> | [`Vector<Document>`](type/Document) | List of saved gifs |

---

## Type

[messages.SavedGifs](type/messages.SavedGifs)

---

## Example

```php
$messagesSavedGifs = $client->messages->savedGifs(
	hash : 0,
	gifs : array(
		$client->documentEmpty(
			id : 6786517980563870391,
		),
		$client->document(
			id : -7142864318554424871,
			access_hash : -163711087753876613,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 64,
			mime_type : '1G2qTl5osXxpevhw',
			size : -5644287983755240470,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'xvdzIUTqMgmrW2DB',
				),
				$client->photoSize(
					type : '3DqcVusBfabHPILZ',
					w : 52,
					h : 46,
					size : 99,
				),
				$client->photoCachedSize(
					type : 'W07czrRNOGF8tasT',
					w : 19,
					h : 22,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'Aqil1CFuWEcP3gIo',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'RdZ8xgphsSTPKk4C',
					w : 26,
					h : 39,
					sizes : array(17),
				),
				$client->photoPathSize(
					type : 'YzCkF7AfVaWoBRQg',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'apEBu4GfXdqswL3c',
					w : 89,
					h : 6,
					size : 85,
					video_start_ts : 1362907.5439453125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -7971004034942722654,
					background_colors : array(8),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -303811379662966857,
					background_colors : array(2),
				),
			),
			dc_id : 34,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 13,
					h : 31,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'SLbz3C6VTegIX8iG',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 33,
						x : -2047826.45703125,
						y : -1893547.435546875,
						zoom : -1937846.6767578125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1363232.2529296875,
					w : 100,
					h : 80,
					preload_prefix_size : 90,
					video_start_ts : 221180.640625,
					video_codec : 'Y81OdJF9BNQXA03o',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 42,
					title : '0RiIMwCj85L3loOP',
					performer : '6ZopKUCwLI5uYqci',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'hxT4t52wu8ZK9aNV',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'VDu1UIN7KXgG9BdH',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```