# webDocument

**Description** : *Remote document*

**Layer** : 214

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
	access_hash : -1049956300986938465,
	size : 87,
	mime_type : 'mOg8yBp3HV49ATvD',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 61,
			h : 43,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'f8WRIGCXYclu4b2m',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 81,
				x : -822866.73828125,
				y : 1366260.1513671875,
				zoom : 273655.0439453125,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -843635.5322265625,
			w : 83,
			h : 83,
			preload_prefix_size : 92,
			video_start_ts : 1987037.6728515625,
			video_codec : '02OVXLPyCdHs4kU3',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 80,
			title : 'm1rBJapFz2eLE4qy',
			performer : 'TEKlFYdgwH6hfX9o',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : '5Gpr7IVko6JwtlEx',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'qfJz39kj6ZIYg8As',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```