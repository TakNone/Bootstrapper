# messages.favedStickers

**Description** : *Favorited stickers*

**Layer** : 222

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
			emoticon : 'Pqzr6lZxKv4VCE29',
			documents : array(-1206958643804364329),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : -8941630593576853126,
		),
		$client->document(
			id : -7666373798824061953,
			access_hash : 1083054946392097149,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 41,
			mime_type : 'QjnuAtNILrpesgMH',
			size : -5328788391038138221,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'HhlyBOaqbMT1jJ73',
				),
				$client->photoSize(
					type : 'AXEtWk6uhzZCOFHs',
					w : 24,
					h : 84,
					size : 64,
				),
				$client->photoCachedSize(
					type : 'WqR7pjJCMoxunLic',
					w : 56,
					h : 47,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'Xj5kBQ9gt7Cvfc1l',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'HJzqsXVQS3Zytd49',
					w : 97,
					h : 88,
					sizes : array(78),
				),
				$client->photoPathSize(
					type : 'hR9l0QkvSw3PuGFj',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'TGftR4PV89ijU7YZ',
					w : 91,
					h : 29,
					size : 66,
					video_start_ts : -1848042.75390625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 1786352297878798646,
					background_colors : array(87),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 4050210299663060408,
					background_colors : array(94),
				),
			),
			dc_id : 28,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 31,
					h : 25,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'auDtf0oRb1qn8JvU',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 89,
						x : -1489456.9677734375,
						y : 1192837.767578125,
						zoom : 1747065.9873046875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1255218.5439453125,
					w : 43,
					h : 38,
					preload_prefix_size : 84,
					video_start_ts : -791514.7041015625,
					video_codec : 'Mt0nHe8IF3ZyLcCm',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 71,
					title : 'qWuD1LKaZGHxfect',
					performer : 'YflhjiITqyXbneg4',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'JI3XftVh6OiSFZvm',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'ALwVp9ykr7YJxECM',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```