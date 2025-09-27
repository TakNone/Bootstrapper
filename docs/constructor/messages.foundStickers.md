# messages.foundStickers

**Description** : *Found stickers*

**Layer** : 216

```tl
messages.foundStickers#82c9e290 flags:# next_offset:flags.0?int hash:long stickers:Vector<Document> = messages.FoundStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	next_offset : 2,
	hash : 0,
	stickers : array(
		$client->documentEmpty(
			id : 6693361679887539137,
		),
		$client->document(
			id : 7740917385048750400,
			access_hash : 8583366429146358640,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 14,
			mime_type : 'aE3l824AFCfBpTgP',
			size : 7904801862988359913,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'VAYf5SC269xU8Q0q',
				),
				$client->photoSize(
					type : 'tGdsQOoNSF0CmfiZ',
					w : 5,
					h : 17,
					size : 48,
				),
				$client->photoCachedSize(
					type : 'O1rv5LBJCk762IT0',
					w : 16,
					h : 32,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'H2cqM9NbjlziECK4',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'OH9ZSdPCe1vq0hfc',
					w : 35,
					h : 54,
					sizes : array(48),
				),
				$client->photoPathSize(
					type : 'cD7Rx9gS385muLra',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'Y6jprgyCienQDUzq',
					w : 55,
					h : 66,
					size : 63,
					video_start_ts : -74191.4482421875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4984204339758819789,
					background_colors : array(30),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -3916125660076653938,
					background_colors : array(65),
				),
			),
			dc_id : 83,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 97,
					h : 61,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'gCq3rSzOPkwVje9R',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 717061.673828125,
					w : 15,
					h : 95,
					preload_prefix_size : 0,
					video_start_ts : 1928785.033203125,
					video_codec : 'qd6jYo0Sa9vhBxs8',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 28,
					title : 'I5XQiZxsw2mjNqug',
					performer : 'GmVqZsOv1JSrXnME',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'dgoDAa50TFWBqrSU',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'EFz8DxXGfaQ2nV1p',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```