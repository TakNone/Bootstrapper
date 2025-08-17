# webPageAttributeStarGiftCollection

**Layer** : 211

```tl
webPageAttributeStarGiftCollection#31cad303 icons:Vector<Document> = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>icons</mark> | [`Vector<Document>`](type/Document) | NOTHING |

---

## Type

[WebPageAttribute](type/WebPageAttribute)

---

## Example

```php
$webPageAttribute = $client->webPageAttributeStarGiftCollection(
	icons : array(
		$client->documentEmpty(
			id : 529203614056838775,
		),
		$client->document(
			id : -1720722765005026174,
			access_hash : 7093042023987806403,
			file_reference : 'o?$&?LiveProto??7',
			date : 44,
			mime_type : 'vDrP3h9bXkAg1ewK',
			size : 960906738287051969,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'sraGQyi0YXP9JOo4',
				),
				$client->photoSize(
					type : 'pQetfHMnzYPqhB5Z',
					w : 44,
					h : 36,
					size : 48,
				),
				$client->photoCachedSize(
					type : '7u2JBhyGritoqXT6',
					w : 15,
					h : 72,
					bytes : 'm$?,?LiveProto??3',
				),
				$client->photoStrippedSize(
					type : 'wVgyFoDQbRUGLrn9',
					bytes : 'ecYLiveProto8??',
				),
				$client->photoSizeProgressive(
					type : '34BKLhgu5Fikq0YJ',
					w : 70,
					h : 13,
					sizes : array(62),
				),
				$client->photoPathSize(
					type : '8ZULCYtrXd2Km1Jz',
					bytes : 'w`] KLiveProto??wi',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'Lb3uZYXScpz7akUB',
					w : 93,
					h : 92,
					size : 50,
					video_start_ts : 1921827.7158203125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -4780699503349559155,
					background_colors : array(89),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 4597807165385771616,
					background_colors : array(23),
				),
			),
			dc_id : 2,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 32,
					h : 30,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'JBHSUtvQ6fNFXzYw',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1779102.6015625,
					w : 36,
					h : 1,
					preload_prefix_size : 88,
					video_start_ts : -1703904.1416015625,
					video_codec : 'ULZtd23ochPHiWTR',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 77,
					title : 'DSMaGn72A8huWBrZ',
					performer : 'QVbFi1s3JdXORAhL',
					waveform : '??LiveProto??#j',
				),
				$client->documentAttributeFilename(
					file_name : 'gE13VbwqeTGHQuJU',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Il0Y6CgiXtOWZDzJ',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```