# photoStrippedSize

**Description** : *A low\-resolution compressed JPG payload*

**Layer** : 233

```tl
photoStrippedSize#e0b0bc2e type:string bytes:bytes = PhotoSize;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>type</mark> | [`string`](type/string) | PhotoSize.type value » |
| <mark>bytes</mark> | [`bytes`](type/bytes) | Thumbnail data, see stripped thumbnails » |

---

## Type

[PhotoSize](type/PhotoSize)

---

## Example

```php
$photoSize = $client->photoStrippedSize(
	type : 'ajF1ZSYCuTf4qmpl',
	bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```