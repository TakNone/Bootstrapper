# photoSizeProgressive

**Description** : *Progressively encoded photosize*

**Layer** : 211

```tl
photoSizeProgressive#fa3efb95 type:string w:int h:int sizes:Vector<int> = PhotoSize;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>type</mark> | [`string`](type/string) | Photosize type » |
| <mark>w</mark> | [`int`](type/int) | Photo width |
| <mark>h</mark> | [`int`](type/int) | Photo height |
| <mark>sizes</mark> | [`Vector<int>`](type/int) | Sizes of progressive JPEG file prefixes, which can be used to preliminarily show the image |

---

## Type

[PhotoSize](type/PhotoSize)

---

## Example

```php
$photoSize = $client->photoSizeProgressive(
	type : 'EkHGL9nOdQyFrfxN',
	w : 14,
	h : 90,
	sizes : array(91),
);
```