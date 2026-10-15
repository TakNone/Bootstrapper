# inputMediaUploadedDocument

**Description** : *New document*

**Layer** : 229

```tl
inputMediaUploadedDocument#37c9330 flags:# nosound_video:flags.3?true force_file:flags.4?true spoiler:flags.5?true file:InputFile thumb:flags.2?InputFile mime_type:string attributes:Vector<DocumentAttribute> stickers:flags.0?Vector<InputDocument> video_cover:flags.6?InputPhoto video_timestamp:flags.7?int ttl_seconds:flags.1?int = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **nosound_video** | [`flags.3?true`](type/true) | Whether to send the file as a video even if it doesn't have an audio track (i.e. if set, the documentAttributeAnimated attribute will not be set even for videos without audio) |
| **force_file** | [`flags.4?true`](type/true) | Force the media file to be uploaded as document |
| **spoiler** | [`flags.5?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| <mark>file</mark> | [`InputFile`](type/InputFile) | The uploaded file |
| **thumb** | [`flags.2?InputFile`](type/InputFile) | Thumbnail of the document, uploaded as for the file |
| <mark>mime_type</mark> | [`string`](type/string) | MIME type of document |
| <mark>attributes</mark> | [`Vector<DocumentAttribute>`](type/DocumentAttribute) | Attributes that specify the type of the document (video, audio, voice, sticker, etc.) |
| **stickers** | [`flags.0?Vector<InputDocument>`](type/InputDocument) | Attached stickers |
| **video_cover** | [`flags.6?InputPhoto`](type/InputPhoto) | Start playing the video at the specified timestamp (seconds) |
| **video_timestamp** | [`flags.7?int`](type/int) | Start playing the video at the specified timestamp (seconds) |
| **ttl_seconds** | [`flags.1?int`](type/int) | Time to live of self-destructing document, can be 0 to disable self-destruction, 0x7FFFFFFF to self-destruct the document immediately after it's played; otherwise self-destructs ttl_seconds after it's played |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaUploadedDocument(
	nosound_video : true,
	force_file : true,
	spoiler : true,
	file : $client->upload_file(path : 'file.png'),
	thumb : $client->upload_file(path : 'file.png'),
	mime_type : 'ZgOjGwRsF6CAo41v',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 28,
			h : 72,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'd0H3loAKTaL2whiM',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 82,
				x : 1860758.349609375,
				y : -1385818.904296875,
				zoom : -553779.7734375,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -1012809.4111328125,
			w : 53,
			h : 14,
			preload_prefix_size : 72,
			video_start_ts : 1620722.0703125,
			video_codec : 'uSgsPKTGzaAtJFpI',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 74,
			title : 'qE0zof8JrS7eFnPa',
			performer : 'I2iypCqhXLkHwlrv',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : '90YAmKqL4RNyOMgV',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'vZfKalo3tgIdquOT',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
	stickers : array(
		$client->inputDocumentEmpty(),
		$client->inputDocument(
			id : -6532201606355869301,
			access_hash : 7864189045580195753,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_cover : $client->inputPhotoEmpty(),
	video_timestamp : 55,
	ttl_seconds : 6,
);
```