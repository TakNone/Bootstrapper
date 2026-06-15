# messages.savedGifs

**Description** : *Saved gifs*

**Layer** : 227

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
			id : -2571719999063919640,
		),
		$client->document(
			id : -3189449274602642599,
			access_hash : 3111764587852147783,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 98,
			mime_type : '6SdMUVE9rxQ7bYLg',
			size : -5164192110373707842,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'IJZpj54B8rRYwUKA',
				),
				$client->photoSize(
					type : 'lob0RH1CptMnsyvA',
					w : 0,
					h : 86,
					size : 53,
				),
				$client->photoCachedSize(
					type : 'G51VU3JxlRKrvjhs',
					w : 30,
					h : 79,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'dJgaWo35lyMG6P8C',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'WN0aGdl65y7rKDR1',
					w : 23,
					h : 90,
					sizes : array(2),
				),
				$client->photoPathSize(
					type : 'XbZJl7Wf2ytxgk0G',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'SiC0y2IfBEwYcHsX',
					w : 69,
					h : 79,
					size : 88,
					video_start_ts : 1684610.6162109375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 3025717601006476238,
					background_colors : array(5),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 6628041860855595425,
					background_colors : array(60),
				),
			),
			dc_id : 33,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 51,
					h : 40,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'unEa6BOie275H0Fj',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 98,
						x : -485786.943359375,
						y : -2093877.0498046875,
						zoom : -1247710.63671875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 129805.2724609375,
					w : 73,
					h : 82,
					preload_prefix_size : 74,
					video_start_ts : -1652473.7236328125,
					video_codec : 'vjgm8ACE0G6HsIzO',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 16,
					title : '2ancTJAeF5l4Kb6B',
					performer : '6XEjFRbfPwaGdCp7',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'qxS2vAEWrmQKYuOi',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'p0xSFVlamufADKoN',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```