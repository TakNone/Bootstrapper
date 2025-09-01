# messages.foundStickers

**Description** : *Found stickers*

**Layer** : 214

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
	next_offset : 44,
	hash : 1488008325293000577,
	stickers : array(
		$client->documentEmpty(
			id : 4401733347601445676,
		),
		$client->document(
			id : -6950384156764633899,
			access_hash : -1359431728773212550,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 81,
			mime_type : '3SBz4X80sVAbxFWO',
			size : -6403564670749753616,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '1mgw6aZSrVj2JCeh',
				),
				$client->photoSize(
					type : 'JPgKiZwzSOLQrm4l',
					w : 100,
					h : 22,
					size : 59,
				),
				$client->photoCachedSize(
					type : '1s3ZV2BmKuS4Lapx',
					w : 92,
					h : 40,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'KMgyb1SZFeApxlnu',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'riZKyYJet4zVn6Hd',
					w : 0,
					h : 49,
					sizes : array(29),
				),
				$client->photoPathSize(
					type : 'sq1E9wfN24XZOhHb',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'u0KV6ytv5ki13Cg9',
					w : 19,
					h : 19,
					size : 46,
					video_start_ts : 1152374.2978515625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -861070483163104355,
					background_colors : array(96),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 3512291988033738276,
					background_colors : array(71),
				),
			),
			dc_id : 49,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 64,
					h : 98,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '4OohxQUubz97qGDM',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1684067.03515625,
					w : 19,
					h : 36,
					preload_prefix_size : 47,
					video_start_ts : 9140.85546875,
					video_codec : 'NHP31OwlxgypmVuL',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 0,
					title : '0QeDC45TVABKYrX8',
					performer : 'PCiNx5ysABwg7IJt',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'zYBMRZ7K8iJW4cIH',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '5voWrCDbdOihu07w',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```