# photoSize

**Description** : *Image description*

**Layer** : 222

```tl
photoSize#75c78e60 type:string w:int h:int size:int = PhotoSize;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>type</mark> | [`string`](type/string) | Thumbnail type » |
| <mark>w</mark> | [`int`](type/int) | Image width |
| <mark>h</mark> | [`int`](type/int) | Image height |
| <mark>size</mark> | [`int`](type/int) | File size |

---

## Type

[PhotoSize](type/PhotoSize)

---

## Example

```php
$photoSize = $client->photoSize(
	type : 'XQACxYTke5yLsw2p',
	w : 87,
	h : 12,
	size : 9,
);
```