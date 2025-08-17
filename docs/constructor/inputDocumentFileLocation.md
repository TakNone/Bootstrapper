# inputDocumentFileLocation

**Description** : *Document location (video, voice, audio, basically every type except photo)*

**Layer** : 211

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
	id : -5689346059014413720,
	access_hash : -3834902631124872635,
	file_reference : '$ْ??LiveProtoTG??4',
	thumb_size : 'sAdVcOBEkl1uHjwR',
);
```