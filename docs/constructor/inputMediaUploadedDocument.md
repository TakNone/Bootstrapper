# inputMediaUploadedDocument

**Description** : *New document*

**Layer** : 211

```tl
inputMediaUploadedDocument#37c9330 flags:# nosound_video:flags.3?true force_file:flags.4?true spoiler:flags.5?true file:InputFile thumb:flags.2?InputFile mime_type:string attributes:Vector<DocumentAttribute> stickers:flags.0?Vector<InputDocument> video_cover:flags.6?InputPhoto video_timestamp:flags.7?int ttl_seconds:flags.1?int = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **nosound_video** | [`flags.3?true`](type/true) | Whether the specified document is a video file with no audio tracks (a GIF animation (even as MPEG4), for example) |
| **force_file** | [`flags.4?true`](type/true) | Force the media file to be uploaded as document |
| **spoiler** | [`flags.5?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| <mark>file</mark> | [`InputFile`](type/InputFile) | The uploaded file |
| **thumb** | [`flags.2?InputFile`](type/InputFile) | Thumbnail of the document, uploaded as for the file |
| <mark>mime_type</mark> | [`string`](type/string) | MIME type of document |
| <mark>attributes</mark> | [`Vector<DocumentAttribute>`](type/DocumentAttribute) | Attributes that specify the type of the document (video, audio, voice, sticker, etc.) |
| **stickers** | [`flags.0?Vector<InputDocument>`](type/InputDocument) | Attached stickers |
| **video_cover** | [`flags.6?InputPhoto`](type/InputPhoto) | NOTHING |
| **video_timestamp** | [`flags.7?int`](type/int) | NOTHING |
| **ttl_seconds** | [`flags.1?int`](type/int) | Time to live in seconds of self-destructing document |

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
	file : $client->inputFile(
		id : -5237520760251131375,
		parts : 3,
		name : 'v9QBmsXekUwgSzJV',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	thumb : $client->inputFile(
		id : 9120538286992267096,
		parts : 97,
		name : 'zPxDSjC9EuavdFsc',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	mime_type : 'le0XvcnPQsOrwDp9',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 87,
			h : 96,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'nJtU1fvgT3XeDBQO',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 25,
				x : 177004.306640625,
				y : 269019.7724609375,
				zoom : -182545.234375,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -436431.9169921875,
			w : 12,
			h : 23,
			preload_prefix_size : 10,
			video_start_ts : 249898.46484375,
			video_codec : 'uSDYxgW9wKQfOjLk',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 13,
			title : 'DA34aP8dqr7Kj6Qz',
			performer : 'yL42mOk3rRlPCW6B',
			waveform : '8YjU?LiveProto?44Uh',
		),
		$client->documentAttributeFilename(
			file_name : 'RSWuv5FfQtONelko',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'vEtxlDJ4esuzA1Lw',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
	stickers : array(
		$client->inputDocumentEmpty(),
		$client->inputDocument(
			id : 8355772630466770712,
			access_hash : 8680554026909901023,
			file_reference : '-?V]?LiveProtoq??U?',
		),
	),
	video_cover : $client->inputPhotoEmpty(),
	video_timestamp : 45,
	ttl_seconds : 14,
);
```