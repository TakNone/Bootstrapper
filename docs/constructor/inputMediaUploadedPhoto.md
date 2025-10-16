# inputMediaUploadedPhoto

**Description** : *Photo*

**Layer** : 216

```tl
inputMediaUploadedPhoto#1e287d04 flags:# spoiler:flags.2?true file:InputFile stickers:flags.0?Vector<InputDocument> ttl_seconds:flags.1?int = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **spoiler** | [`flags.2?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| <mark>file</mark> | [`InputFile`](type/InputFile) | The uploaded file |
| **stickers** | [`flags.0?Vector<InputDocument>`](type/InputDocument) | Attached mask stickers |
| **ttl_seconds** | [`flags.1?int`](type/int) | Time to live in seconds of self-destructing photo |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaUploadedPhoto(
	spoiler : true,
	file : $client->inputFile(
		id : -5714153642857263221,
		parts : 95,
		name : 'xa6pb2LR7X5meUTQ',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	stickers : array(
		$client->inputDocumentEmpty(),
		$client->inputDocument(
			id : -9176797935200894649,
			access_hash : 9102774426005498449,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	ttl_seconds : 19,
);
```