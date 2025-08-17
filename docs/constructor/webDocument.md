# webDocument

**Description** : *Remote document*

**Layer** : 211

```tl
webDocument#1c570ed1 url:string access_hash:long size:int mime_type:string attributes:Vector<DocumentAttribute> = WebDocument;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | Document URL |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash |
| <mark>size</mark> | [`int`](type/int) | File size |
| <mark>mime_type</mark> | [`string`](type/string) | MIME type |
| <mark>attributes</mark> | [`Vector<DocumentAttribute>`](type/DocumentAttribute) | Attributes for media types |

---

## Type

[WebDocument](type/WebDocument)

---

## Example

```php
$webDocument = $client->webDocument(
	url : 'https://docs.liveproto.dev',
	access_hash : -2804909385510340298,
	size : 5,
	mime_type : 'Yy8AZSz9FrwkuDRP',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 57,
			h : 19,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'MNS61ZkiKAPTUgIq',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 30,
				x : 1418078.5908203125,
				y : 400487.1953125,
				zoom : 1874818.322265625,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -42194.9306640625,
			w : 27,
			h : 18,
			preload_prefix_size : 93,
			video_start_ts : 99603.642578125,
			video_codec : 'rpEM6QlymI1NaeOS',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 61,
			title : 'tgUBGN1Q8bymrqFL',
			performer : 'JqunRUyMzrePx0TO',
			waveform : '?
?C?LiveProto{?Z??',
		),
		$client->documentAttributeFilename(
			file_name : 'QNw2mdp57zsfH9Tu',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'caYhb0LedqOs6nE3',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```