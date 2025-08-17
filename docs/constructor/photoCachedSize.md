# photoCachedSize

**Description** : *Description of an image and its content*

**Layer** : 211

```tl
photoCachedSize#21e1ad6 type:string w:int h:int bytes:bytes = PhotoSize;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>type</mark> | [`string`](type/string) | Thumbnail type |
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
	type : 'DyiQ7rCV8tJcYejI',
	w : 76,
	h : 83,
	bytes : '?0H1LiveProto3?"?',
);
```