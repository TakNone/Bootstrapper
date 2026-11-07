# inputPhotoFileLocation

**Description** : *Use this object to download a photo with upload\.getFile method*

**Layer** : 233

```tl
inputPhotoFileLocation#40181ffe id:long access_hash:long file_reference:bytes thumb_size:string = InputFileLocation;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Photo ID, obtained from the photo object |
| <mark>access_hash</mark> | [`long`](type/long) | Photo's access hash, obtained from the photo object |
| <mark>file_reference</mark> | [`bytes`](type/bytes) | File reference |
| <mark>thumb_size</mark> | [`string`](type/string) | The PhotoSize to download: must be set to the type field of the desired PhotoSize object of the photo |

---

## Type

[InputFileLocation](type/InputFileLocation)

---

## Example

```php
$inputFileLocation = $client->inputPhotoFileLocation(
	id : 5669139136842677787,
	access_hash : 5839278548422866634,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	thumb_size : 'N1oeU25PMstIdvgO',
);
```