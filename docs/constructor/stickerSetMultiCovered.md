# stickerSetMultiCovered

**Description** : *Stickerset, with multiple stickers as preview*

**Layer** : 233

```tl
stickerSetMultiCovered#3407e51b set:StickerSet covers:Vector<Document> = StickerSetCovered;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | Stickerset |
| <mark>covers</mark> | [`Vector<Document>`](type/Document) | Preview stickers |

---

## Type

[StickerSetCovered](type/StickerSetCovered)

---

## Example

```php
$stickerSetCovered = $client->stickerSetMultiCovered(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 18,
		id : -1975576785611376758,
		access_hash : -309190971415991171,
		title : '2pVOXnEyqTzgC6ih',
		short_name : 'QKGYlcDhAZS98zsN',
		thumbs : array(
			$client->photoSizeEmpty(
				type : '5N0UtrXK6Ss2WAbz',
			),
			$client->photoSize(
				type : 'xhy8PTLE2JFl9XQZ',
				w : 98,
				h : 38,
				size : 54,
			),
			$client->photoCachedSize(
				type : '5c1yKJ76XRi8I3Pm',
				w : 92,
				h : 25,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'Hfu92iT1haMNDecz',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'pH7wexrTROhCIgfn',
				w : 0,
				h : 6,
				sizes : array(88),
			),
			$client->photoPathSize(
				type : 'KTf2VGA3JQ6LimNC',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 48,
		thumb_version : 16,
		thumb_document_id : 1887050782662409902,
		count : 33,
		hash : 0,
	),
	covers : array(
		$client->documentEmpty(
			id : -4581942577217442713,
		),
		$client->document(
			id : -3414776677761798630,
			access_hash : -585487506582018358,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 59,
			mime_type : 'zpXhCn3bBoLKdrQm',
			size : -3275295300886748232,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'eF6o3fjnxgrmOiS7',
				),
				$client->photoSize(
					type : 'y18d6NuBTsK7bIZE',
					w : 58,
					h : 99,
					size : 39,
				),
				$client->photoCachedSize(
					type : 'UD9exw5F7dGILMvt',
					w : 45,
					h : 81,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'jTLJueqa8tzrONl6',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'WoK7jznQGT2d5Dqa',
					w : 31,
					h : 81,
					sizes : array(9),
				),
				$client->photoPathSize(
					type : '2nHvYMxfJs7jmr4u',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'mcs48MuZJzgY16Oq',
					w : 59,
					h : 39,
					size : 69,
					video_start_ts : 869498.419921875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -8450179381221105887,
					background_colors : array(82),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 7807853329304208805,
					background_colors : array(30),
				),
			),
			dc_id : 26,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 48,
					h : 92,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'd9pOms4XUFThuzQY',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 69,
						x : 1381079.7431640625,
						y : -707989.64453125,
						zoom : 700959.708984375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1965243.701171875,
					w : 59,
					h : 7,
					preload_prefix_size : 50,
					video_start_ts : 911473.4296875,
					video_codec : 'ifzWKTkj27P0g5sU',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 33,
					title : 'H0EyOmvJquesn68B',
					performer : 'ADQ5IUoStV7r49Nl',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'dLhSIHU38DQzB0Cp',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'EIzkRaUtl5qiACc9',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```