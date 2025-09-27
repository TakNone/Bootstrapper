# inputDocumentFileLocation

**Description** : *Document location \(video, voice, audio, basically every type except photo\)*

**Layer** : 214

```tl
inputDocumentFileLocation#bad07584 id:long access_hash:long file_reference:bytes thumb_size:string = InputFileLocation;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Document ID |
| <mark>access_hash</mark> | [`long`](type/long) | access_hash parameter from the document constructor |
| <mark>file_reference</mark> | [`bytes`](type/bytes) | File reference |
| <mark>thumb_size</mark> | [`string`](type/string) | Thumbnail size to download the thumbnail |

---

## Type

[InputFileLocation](type/InputFileLocation)

---

## Example

```php
$inputFileLocation = $client->inputDocumentFileLocation(
	id : 9178128242945806135,
	access_hash : 3196105087827348283,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	thumb_size : 'nNTaGQieDL125Ovw',
);
```