# messages.foundStickers

**Description** : *Found stickers*

**Layer** : 227

```tl
messages.foundStickers#82c9e290 flags:# next_offset:flags.0?int hash:long stickers:Vector<Document> = messages.FoundStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **next_offset** | [`flags.0?int`](type/int) | Offset for pagination |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>stickers</mark> | [`Vector<Document>`](type/Document) | Found stickers |

---

## Type

[messages.FoundStickers](type/messages.FoundStickers)

---

## Example

```php
$messagesFoundStickers = $client->messages->foundStickers(
	next_offset : 50,
	hash : 0,
	stickers : array(
		$client->documentEmpty(
			id : -2944826130703305880,
		),
		$client->document(
			id : 6749537184595555654,
			access_hash : -2680954238904000195,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 54,
			mime_type : '0rZKMPpNgWmksbSv',
			size : 821151467778443226,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'qJy4BIOe17ZAtvPo',
				),
				$client->photoSize(
					type : 'zrb4y7xT62c5f8kl',
					w : 28,
					h : 56,
					size : 11,
				),
				$client->photoCachedSize(
					type : 'SYkyHzofxTFwsvqV',
					w : 30,
					h : 38,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '4XY8ky5H1NJZdjLO',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'orWN64cCs9Pmk0ip',
					w : 5,
					h : 46,
					sizes : array(27),
				),
				$client->photoPathSize(
					type : 'Y1dTUhg3M7afVAmP',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'ZELdxn50FXDoHku4',
					w : 87,
					h : 65,
					size : 65,
					video_start_ts : -630380.8232421875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 2029005660969614320,
					background_colors : array(61),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -2811381132245963669,
					background_colors : array(40),
				),
			),
			dc_id : 62,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 20,
					h : 1,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'zdUQDKY4RitNj51h',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 12,
						x : 897227.453125,
						y : -1013752.689453125,
						zoom : -1946768.025390625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1344639.5419921875,
					w : 77,
					h : 61,
					preload_prefix_size : 69,
					video_start_ts : -1840795.712890625,
					video_codec : 'zWQjGOTLcFsfCyu1',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 81,
					title : 'sJOuWSHpnN1mMBdb',
					performer : 'IN8d4k0MHoPTncOR',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'KDwjagz48mfA3qpl',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'nTz9XeELslP4pAuD',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```