# inputMediaUploadedPhoto

**Description** : *Photo*

**Layer** : 211

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
		id : 7145253014270625121,
		parts : 94,
		name : '6jVz2RmhPpJovaur',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	stickers : array(
		$client->inputDocumentEmpty(),
		$client->inputDocument(
			id : 2916189200169757441,
			access_hash : 2707036877468183984,
			file_reference : '???@LiveProto9???w',
		),
	),
	ttl_seconds : 39,
);
```