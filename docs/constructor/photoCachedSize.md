# photoCachedSize

**Description** : *Description of an image and its content*

**Layer** : 233

```tl
photoCachedSize#21e1ad6 type:string w:int h:int bytes:bytes = PhotoSize;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>type</mark> | [`string`](type/string) | PhotoSize.type value » |
| <mark>w</mark> | [`int`](type/int) | Image width |
| <mark>h</mark> | [`int`](type/int) | Image height |
| <mark>bytes</mark> | [`bytes`](type/bytes) | Binary data, file content |

---

## Type

[PhotoSize](type/PhotoSize)

---

## Example

```php
$photoSize = $client->photoCachedSize(
	type : 'wEsgGUDnvHQPWkAL',
	w : 65,
	h : 34,
	bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```