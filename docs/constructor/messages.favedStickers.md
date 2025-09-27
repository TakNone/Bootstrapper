# messages.favedStickers

**Description** : *Favorited stickers*

**Layer** : 214

```tl
messages.favedStickers#2cb51097 hash:long packs:Vector<StickerPack> stickers:Vector<Document> = messages.FavedStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>packs</mark> | [`Vector<StickerPack>`](type/StickerPack) | Emojis associated to stickers |
| <mark>stickers</mark> | [`Vector<Document>`](type/Document) | Favorited stickers |

---

## Type

[messages.FavedStickers](type/messages.FavedStickers)

---

## Example

```php
$messagesFavedStickers = $client->messages->favedStickers(
	hash : 0,
	packs : array(
		$client->stickerPack(
			emoticon : '6v49QKuo8SMechO1',
			documents : array(4063142193454315576),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : -4142575697455804106,
		),
		$client->document(
			id : -2517505939050517091,
			access_hash : 5758055907722031182,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 78,
			mime_type : '2s3MKqvhPezRYobk',
			size : -2516307571730166718,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'jHE1rvIF2JWd7me6',
				),
				$client->photoSize(
					type : 'oMKnkQj2FYE0qati',
					w : 88,
					h : 35,
					size : 57,
				),
				$client->photoCachedSize(
					type : 'AKEuwnUFhiBMTY1f',
					w : 93,
					h : 19,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'z4aGk07LBPuNJgsR',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'VXcNhRT3igEJZ1rv',
					w : 42,
					h : 22,
					sizes : array(15),
				),
				$client->photoPathSize(
					type : '4wEVsky90FWCBRDh',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'Wr2PscLYwnB4fQUt',
					w : 40,
					h : 27,
					size : 75,
					video_start_ts : -573953.484375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -2934529644463510779,
					background_colors : array(87),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 4138992107293287937,
					background_colors : array(51),
				),
			),
			dc_id : 44,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 64,
					h : 4,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'nzjePD2IwlcFuoLd',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 706528.17578125,
					w : 54,
					h : 5,
					preload_prefix_size : 14,
					video_start_ts : -1521613.203125,
					video_codec : 'KmvOowuGMYzXIdh1',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 35,
					title : 'Fe1XURd938tsqgEA',
					performer : 'LRwJCoKlrf1vSiGU',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'gLbiNR0ZK5Sx6YjI',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'aNIutLFVpOrD3SwP',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```