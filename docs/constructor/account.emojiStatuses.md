# account.emojiStatuses

**Description** : *A list of emoji statuses*

**Layer** : 222

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
	hash : 0,
	statuses : array(
		$client->emojiStatusEmpty(),
		$client->emojiStatus(
			document_id : -8501385787234175994,
			until : 99,
		),
		$client->emojiStatusCollectible(
			collectible_id : -6846268063710754011,
			document_id : 8230468619480864228,
			title : 'wtKf5WEdglDiUoaC',
			slug : 'rvQ0efFEPxMsaiUW',
			pattern_document_id : 431714555212357304,
			center_color : 0,
			edge_color : 88,
			pattern_color : 14,
			text_color : 6,
			until : 43,
		),
		$client->inputEmojiStatusCollectible(
			collectible_id : 863338000004199470,
			until : 19,
		),
	),
);
```