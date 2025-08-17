# messages.favedStickers

**Description** : *Favorited stickers*

**Layer** : 211

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
	hash : -6626551496292414435,
	packs : array(
		$client->stickerPack(
			emoticon : 'CT1vuh7dik0UL4rR',
			documents : array(5750977770525560173),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : 2708659990756451205,
		),
		$client->document(
			id : -8993390561499911203,
			access_hash : -9112441194783945887,
			file_reference : '?E?LiveProto?w?"?',
			date : 92,
			mime_type : 'MNHg6X7O4P5hGFxY',
			size : 5158122212443402976,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '4nOVqgXsw2tlM6zS',
				),
				$client->photoSize(
					type : 'Tp7v94JnXRKos3AO',
					w : 20,
					h : 93,
					size : 96,
				),
				$client->photoCachedSize(
					type : 'Jj8t9PYvNK7VLfS0',
					w : 35,
					h : 53,
					bytes : 's8,?LiveProto?u???',
				),
				$client->photoStrippedSize(
					type : 'Nz8wtEZhjCln6V2r',
					bytes : '???[MLiveProto?
Jֿ',
				),
				$client->photoSizeProgressive(
					type : 'ghbH1QkcC4B6N9S3',
					w : 23,
					h : 3,
					sizes : array(60),
				),
				$client->photoPathSize(
					type : 'PyV4SaIuBTDiMelF',
					bytes : 'ݶV??LiveProto?<O?',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'BuL1labZgTPGr9ME',
					w : 59,
					h : 33,
					size : 34,
					video_start_ts : 906716.607421875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 7783088189248967241,
					background_colors : array(70),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -5703803085538551880,
					background_colors : array(14),
				),
			),
			dc_id : 86,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 60,
					h : 72,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'NSRhLVrB9TICzlXj',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 739096.52734375,
					w : 86,
					h : 15,
					preload_prefix_size : 56,
					video_start_ts : -301296.77734375,
					video_codec : 'kvWGJTBrsu7Z9QPd',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 74,
					title : 'VfIuTt0gebv9wZLS',
					performer : '2ZkDsB0ChMxeRg8c',
					waveform : '?dLiveProto??i',
				),
				$client->documentAttributeFilename(
					file_name : 'vjmO5EIPJq901pXz',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'zh61uMSvC98ewOFg',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```