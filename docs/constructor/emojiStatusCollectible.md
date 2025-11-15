# emojiStatusCollectible

**Description** : *An owned collectible gift &raquo; as emoji status*

**Layer** : 218

```tl
emojiStatusCollectible#7184603b flags:# collectible_id:long document_id:long title:string slug:string pattern_document_id:long center_color:int edge_color:int pattern_color:int text_color:int until:flags.0?int = EmojiStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>collectible_id</mark> | [`long`](type/long) | ID of the collectible (from starGiftUnique.id) |
| <mark>document_id</mark> | [`long`](type/long) | ID of the custom emoji representing the status |
| <mark>title</mark> | [`string`](type/string) | Name of the collectible |
| <mark>slug</mark> | [`string`](type/string) | Unique identifier of the collectible that may be used to create a collectible gift link » for the current collectible, or to fetch further info about the collectible using payments.getUniqueStarGift |
| <mark>pattern_document_id</mark> | [`long`](type/long) | The ID of a pattern to apply on the profile's backdrop, correlated to the starGiftAttributePattern from the gift in slug |
| <mark>center_color</mark> | [`int`](type/int) | Color of the center of the profile backdrop in RGB24 format, from the gift's starGiftAttributeBackdrop |
| <mark>edge_color</mark> | [`int`](type/int) | Color of the edges of the profile backdrop in RGB24 format, from the gift's starGiftAttributeBackdrop |
| <mark>pattern_color</mark> | [`int`](type/int) | Color of the pattern_document_id applied on the profile backdrop in RGB24 format, from the gift's starGiftAttributeBackdrop |
| <mark>text_color</mark> | [`int`](type/int) | Color of text on the profile backdrop in RGB24 format, from the gift's starGiftAttributeBackdrop |
| **until** | [`flags.0?int`](type/int) | If set, the emoji status will be active until the specified unixtime |

---

## Type

[EmojiStatus](type/EmojiStatus)

---

## Example

```php
$emojiStatus = $client->emojiStatusCollectible(
	collectible_id : -184455955785560003,
	document_id : 773876959400202684,
	title : 'EVHK97u8s2f1AUdO',
	slug : 'Z2FN9iGxnT3wbqId',
	pattern_document_id : -2078449758396959462,
	center_color : 28,
	edge_color : 8,
	pattern_color : 30,
	text_color : 27,
	until : 100,
);
```