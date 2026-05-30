# stickerSetMultiCovered

**Description** : *Stickerset, with multiple stickers as preview*

**Layer** : 222

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
		installed_date : 57,
		id : -2355912839427668553,
		access_hash : 8490053992863471223,
		title : 'eNYxAQ0RSOKJVyGC',
		short_name : 'DRbrz3J7nCIQHMai',
		thumbs : array(
			$client->photoSizeEmpty(
				type : '5QtumJ2pD0eiCLdX',
			),
			$client->photoSize(
				type : 'hmHNeWDjMRVnCFqi',
				w : 2,
				h : 36,
				size : 56,
			),
			$client->photoCachedSize(
				type : '7ENZ8fWPG59UcYob',
				w : 90,
				h : 51,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : '4XOwiMpE82vUh19W',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : '1InTOtokZYFsH9Wl',
				w : 25,
				h : 100,
				sizes : array(18),
			),
			$client->photoPathSize(
				type : 'U2cbhnGjodq0B1IP',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 62,
		thumb_version : 90,
		thumb_document_id : 5744054177809330086,
		count : 9,
		hash : 0,
	),
	covers : array(
		$client->documentEmpty(
			id : 5901001890859828340,
		),
		$client->document(
			id : -4727941008483366945,
			access_hash : -5753847661589920069,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 96,
			mime_type : 'PDQnMRhZFwJOtpI7',
			size : 727337688172311239,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'Z8n0GLOb6jRAqtEa',
				),
				$client->photoSize(
					type : 'fmc5TgpAQLhvaMuI',
					w : 80,
					h : 13,
					size : 63,
				),
				$client->photoCachedSize(
					type : 'RVhPp7ZCg8XvG5kn',
					w : 0,
					h : 14,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '1R5FCSvzjisYXlTV',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'FJgSPBLXkwbjd4aM',
					w : 5,
					h : 70,
					sizes : array(78),
				),
				$client->photoPathSize(
					type : 'TJS97p4o5LHgUhwB',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'BYt1wrPsF8jG2Qeb',
					w : 84,
					h : 54,
					size : 99,
					video_start_ts : 1225218.888671875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 963473136031666795,
					background_colors : array(22),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -8689471827815803818,
					background_colors : array(38),
				),
			),
			dc_id : 27,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 76,
					h : 89,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'hLls8PYB9zUVmryf',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 14,
						x : -2082300.6767578125,
						y : 1092361.6533203125,
						zoom : 485650.033203125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1197405.2333984375,
					w : 90,
					h : 100,
					preload_prefix_size : 3,
					video_start_ts : 1352896.580078125,
					video_codec : 'YWyHVP60tr1seO92',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 20,
					title : 'tNn3M1gr7oHhp4ix',
					performer : 'gj5lXmYobzwCBekU',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'ePyFEB0MgonvYQJL',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'I8T5KXBp6Pca4Gvi',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```