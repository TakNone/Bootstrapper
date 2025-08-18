# messages.savedGifs

**Description** : *Saved gifs*

**Layer** : 211

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
	hash : 1257970791547727569,
	gifs : array(
		$client->documentEmpty(
			id : -8493211226322607227,
		),
		$client->document(
			id : -3858995392279407102,
			access_hash : 3955157092589395366,
			file_reference : 'V?Nh]LiveProto*?C^',
			date : 4,
			mime_type : '7X6J0jsNF4wHZLQA',
			size : -3893658422503648651,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'xsftX2dv6Ym7MGHl',
				),
				$client->photoSize(
					type : 'WDaLs68c0rY9mj4U',
					w : 1,
					h : 17,
					size : 75,
				),
				$client->photoCachedSize(
					type : 'oZmXPuwvcM48HD6k',
					w : 39,
					h : 72,
					bytes : '.3?LLLiveProto?2%',
				),
				$client->photoStrippedSize(
					type : '2ObD0piWBwGnm64k',
					bytes : '??6?LiveProto[?_?',
				),
				$client->photoSizeProgressive(
					type : 'DfcaXOhrw4TNoMbm',
					w : 12,
					h : 47,
					sizes : array(36),
				),
				$client->photoPathSize(
					type : 'MSxKIa0cEQ5ZbhRf',
					bytes : '2?jGLiveProto????',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'NKu64vGMsXhS5BaV',
					w : 98,
					h : 84,
					size : 16,
					video_start_ts : -1818449.634765625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -7732071659047072513,
					background_colors : array(24),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -8279150656574445629,
					background_colors : array(17),
				),
			),
			dc_id : 86,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 86,
					h : 14,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '7IsuKnWNgLoh9Scd',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -39747.146484375,
					w : 90,
					h : 95,
					preload_prefix_size : 45,
					video_start_ts : -665467.7880859375,
					video_codec : 'fedIUmxklQwpqSOP',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 15,
					title : 'FVxEbcT7imZuqNXo',
					performer : '0gp4MhSGVJYqvZu5',
					waveform : '????mLiveProto?R??',
				),
				$client->documentAttributeFilename(
					file_name : 'W2rOm7DqUf8pXnzV',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'n27MCgtFAoEH8X3u',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```