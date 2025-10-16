# emojiStatusCollectible

**Layer** : 216

```tl
emojiStatusCollectible#7184603b flags:# collectible_id:long document_id:long title:string slug:string pattern_document_id:long center_color:int edge_color:int pattern_color:int text_color:int until:flags.0?int = EmojiStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>collectible_id</mark> | [`long`](type/long) | NOTHING |
| <mark>document_id</mark> | [`long`](type/long) | NOTHING |
| <mark>title</mark> | [`string`](type/string) | NOTHING |
| <mark>slug</mark> | [`string`](type/string) | NOTHING |
| <mark>pattern_document_id</mark> | [`long`](type/long) | NOTHING |
| <mark>center_color</mark> | [`int`](type/int) | NOTHING |
| <mark>edge_color</mark> | [`int`](type/int) | NOTHING |
| <mark>pattern_color</mark> | [`int`](type/int) | NOTHING |
| <mark>text_color</mark> | [`int`](type/int) | NOTHING |
| **until** | [`flags.0?int`](type/int) | NOTHING |

---

## Type

[EmojiStatus](type/EmojiStatus)

---

## Example

```php
$emojiStatus = $client->emojiStatusCollectible(
	collectible_id : -4548129908453751533,
	document_id : 7498953081987672755,
	title : 'Fv1iKfxQqjDhn2kI',
	slug : 'CXduJ5kxR4IK79t2',
	pattern_document_id : -8510617940241757165,
	center_color : 48,
	edge_color : 61,
	pattern_color : 3,
	text_color : 2,
	until : 22,
);
```