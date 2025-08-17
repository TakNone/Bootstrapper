# messages.foundStickers

**Description** : *Found stickers*

**Layer** : 211

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
	next_offset : 4,
	hash : -5237522557793149405,
	stickers : array(
		$client->documentEmpty(
			id : -7186556912366457730,
		),
		$client->document(
			id : 6327036198840737567,
			access_hash : 1053063910922672247,
			file_reference : '????LiveProto!?]H?',
			date : 59,
			mime_type : 'g6dHiaBkF4RmQICA',
			size : 6381249804250905726,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '9FmeYSvCsVifQhLl',
				),
				$client->photoSize(
					type : '8aChA9DLrVKcdxp1',
					w : 92,
					h : 1,
					size : 4,
				),
				$client->photoCachedSize(
					type : 'VbNm8wLPMdxTq3vX',
					w : 59,
					h : 2,
					bytes : '' . "\0" . '?e0xLiveProtok?n8',
				),
				$client->photoStrippedSize(
					type : 'k23dEFsX5o0ZPy7N',
					bytes : '???ϯLiveProto???3\'',
				),
				$client->photoSizeProgressive(
					type : 'Or4EQNnJoDwdK0gu',
					w : 10,
					h : 56,
					sizes : array(62),
				),
				$client->photoPathSize(
					type : 'PiIEdHL9KTSOjfkh',
					bytes : 'w"l)LiveProtoƪ?jq',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'SqBgt8a0c2o6CRTb',
					w : 82,
					h : 19,
					size : 48,
					video_start_ts : -1766736.4521484375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 1200138463053829677,
					background_colors : array(40),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -5401213700191792449,
					background_colors : array(55),
				),
			),
			dc_id : 24,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 88,
					h : 18,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'bTXHx57Kmi6PpdCz',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -116543.0048828125,
					w : 69,
					h : 12,
					preload_prefix_size : 1,
					video_start_ts : -1774180.2197265625,
					video_codec : 'DMSYk7ygR9UtOrsZ',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 88,
					title : 'raZsBWdLkYHnVDeT',
					performer : 'jpUFHAfrqeZGJML4',
					waveform : 'Y?h?FLiveProtoC??E?',
				),
				$client->documentAttributeFilename(
					file_name : 'ufTczCrQxg7SmV6U',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'kToD2qgfszNZ8CAj',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```