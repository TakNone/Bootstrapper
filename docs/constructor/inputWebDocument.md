# inputWebDocument

**Description** : *The document*

**Layer** : 227

```tl
inputWebDocument#9bed434d url:string size:int mime_type:string attributes:Vector<DocumentAttribute> = InputWebDocument;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | Remote document URL to be downloaded using the appropriate method |
| <mark>size</mark> | [`int`](type/int) | Remote file size |
| <mark>mime_type</mark> | [`string`](type/string) | Mime type |
| <mark>attributes</mark> | [`Vector<DocumentAttribute>`](type/DocumentAttribute) | Attributes for media types |

---

## Type

[InputWebDocument](type/InputWebDocument)

---

## Example

```php
$inputWebDocument = $client->inputWebDocument(
	url : 'https://docs.liveproto.dev',
	size : 17,
	mime_type : 'czdGWo0pEg2eKVAn',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 88,
			h : 73,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : '7WzqlRwOPQjy8HEK',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 79,
				x : -2007184.5712890625,
				y : -2019604.341796875,
				zoom : -1641091.1044921875,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 1374360.81640625,
			w : 15,
			h : 43,
			preload_prefix_size : 67,
			video_start_ts : 1209720.8330078125,
			video_codec : 'f3psLvNmhdIjPUS9',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 79,
			title : 'zM1hA4GEWqxSw8jL',
			performer : 'IOqKBvrg2C91fLo4',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'JD6rKXT7jAI8oQup',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'w0tI69nWmbsku3F1',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```