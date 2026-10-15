# inputMediaUploadedPhoto

**Description** : *Photo*

**Layer** : 229

```tl
inputMediaUploadedPhoto#7d8375da flags:# spoiler:flags.2?true live_photo:flags.3?true file:InputFile stickers:flags.0?Vector<InputDocument> ttl_seconds:flags.1?int video:flags.3?InputDocument = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **spoiler** | [`flags.2?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| **live_photo** | [`flags.3?true`](type/true) | Whether this is a live photo, i.e. a still photo paired with the short video clip captured alongside it |
| <mark>file</mark> | [`InputFile`](type/InputFile) | The uploaded file |
| **stickers** | [`flags.0?Vector<InputDocument>`](type/InputDocument) | Attached mask stickers |
| **ttl_seconds** | [`flags.1?int`](type/int) | Time to live of self-destructing photo, can be 0 to disable self-destruction, 0x7FFFFFFF to self-destruct the photo immediately after it's played; otherwise self-destructs ttl_seconds after it's played |
| **video** | [`flags.3?InputDocument`](type/InputDocument) | The short video clip of the live photo |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaUploadedPhoto(
	spoiler : true,
	live_photo : true,
	file : $client->upload_file(path : 'file.png'),
	stickers : array(
		$client->inputDocumentEmpty(),
		$client->inputDocument(
			id : 8271402531471462806,
			access_hash : -5766377117951299648,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	ttl_seconds : 31,
	video : $client->inputDocumentEmpty(),
);
```