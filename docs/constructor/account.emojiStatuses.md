# account.emojiStatuses

**Description** : *A list of emoji statuses*

**Layer** : 214

```tl
account.emojiStatuses#90c467d1 hash:long statuses:Vector<EmojiStatus> = account.EmojiStatuses;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>statuses</mark> | [`Vector<EmojiStatus>`](type/EmojiStatus) | Emoji statuses |

---

## Type

[account.EmojiStatuses](type/account.EmojiStatuses)

---

## Example

```php
$accountEmojiStatuses = $client->account->emojiStatuses(
	hash : -6104656049182600915,
	statuses : array(
		$client->emojiStatusEmpty(),
		$client->emojiStatus(
			document_id : 335641142322125569,
			until : 47,
		),
		$client->emojiStatusCollectible(
			collectible_id : 2741537129513665548,
			document_id : 1913654452517748304,
			title : '4F3OZ81xD9BSPst7',
			slug : '5U7gWNLmwIOJhj2f',
			pattern_document_id : -1668842060388764335,
			center_color : 39,
			edge_color : 49,
			pattern_color : 77,
			text_color : 78,
			until : 10,
		),
		$client->inputEmojiStatusCollectible(
			collectible_id : 6247915693509250759,
			until : 51,
		),
	),
);
```