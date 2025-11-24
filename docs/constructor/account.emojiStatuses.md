# account.emojiStatuses

**Description** : *A list of emoji statuses*

**Layer** : 218

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
			document_id : 3708719683723298278,
			until : 96,
		),
		$client->emojiStatusCollectible(
			collectible_id : 2513739840763513445,
			document_id : -3395560907313373,
			title : 'IVlPb2DAhJRzGvQT',
			slug : 'tICTFXAvBw3JfNjm',
			pattern_document_id : -7340801704973638695,
			center_color : 96,
			edge_color : 46,
			pattern_color : 59,
			text_color : 67,
			until : 73,
		),
		$client->inputEmojiStatusCollectible(
			collectible_id : -6120412106905196035,
			until : 66,
		),
	),
);
```