# inputMediaUploadedPhoto

**Description** : *Photo*

**Layer** : 227

```tl
inputMediaUploadedPhoto#7d8375da flags:# spoiler:flags.2?true live_photo:flags.3?true file:InputFile stickers:flags.0?Vector<InputDocument> ttl_seconds:flags.1?int video:flags.3?InputDocument = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **spoiler** | [`flags.2?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| **live_photo** | [`flags.3?true`](type/true) | NOTHING |
| <mark>file</mark> | [`InputFile`](type/InputFile) | The uploaded file |
| **stickers** | [`flags.0?Vector<InputDocument>`](type/InputDocument) | Attached mask stickers |
| **ttl_seconds** | [`flags.1?int`](type/int) | Time to live in seconds of self-destructing photo |
| **video** | [`flags.3?InputDocument`](type/InputDocument) | NOTHING |

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
			id : 3858218557939817778,
			access_hash : 804860591315192386,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	ttl_seconds : 37,
	video : $client->inputDocumentEmpty(),
);
```