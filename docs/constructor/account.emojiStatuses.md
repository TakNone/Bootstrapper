# account.emojiStatuses

**Description** : *A list of emoji statuses*

**Layer** : 229

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
			document_id : -4965923129741868679,
			until : 33,
		),
		$client->emojiStatusCollectible(
			collectible_id : -8986003086366184178,
			document_id : -3275299520258026318,
			title : 'BUrSkcEX8FxpyQVt',
			slug : '7VluTXQFocBLPH1n',
			pattern_document_id : 1059447407105099051,
			center_color : 61,
			edge_color : 49,
			pattern_color : 45,
			text_color : 56,
			until : 28,
		),
		$client->inputEmojiStatusCollectible(
			collectible_id : 5512711718218504120,
			until : 96,
		),
	),
);
```