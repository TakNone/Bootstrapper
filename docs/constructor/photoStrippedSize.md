# photoStrippedSize

**Description** : *A low\-resolution compressed JPG payload*

**Layer** : 211

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
	type : 'P5t4IAsMjfEKv7rT',
	bytes : '?2?LiveProto??T??',
);
```