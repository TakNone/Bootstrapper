# photoStrippedSize

**Description** : *A low\-resolution compressed JPG payload*

**Layer** : 227

```tl
photoStrippedSize#e0b0bc2e type:string bytes:bytes = PhotoSize;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>type</mark> | [`string`](type/string) | Thumbnail type |
| <mark>bytes</mark> | [`bytes`](type/bytes) | Thumbnail data, see here for more info on decompression » |

---

## Type

[PhotoSize](type/PhotoSize)

---

## Example

```php
$photoSize = $client->photoStrippedSize(
	type : 'oGuS7jOMN2lVLyrH',
	bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```