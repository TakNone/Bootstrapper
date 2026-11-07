# photoSize

**Description** : *Image description*

**Layer** : 233

```tl
photoSize#75c78e60 type:string w:int h:int size:int = PhotoSize;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>type</mark> | [`string`](type/string) | PhotoSize.type value » |
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
	type : 'JcfbtpSBDqu53Q6T',
	w : 20,
	h : 11,
	size : 19,
);
```