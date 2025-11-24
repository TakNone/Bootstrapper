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
			document_id : 3840510298146367115,
			until : 29,
		),
		$client->emojiStatusCollectible(
			collectible_id : -5407755447694104732,
			document_id : 8182134947833478724,
			title : 'dX6V2cy8PJbIvkfr',
			slug : '5hzeHDZYnf7mRg9T',
			pattern_document_id : 836552452496754675,
			center_color : 33,
			edge_color : 84,
			pattern_color : 80,
			text_color : 12,
			until : 24,
		),
		$client->inputEmojiStatusCollectible(
			collectible_id : 8344877904336344953,
			until : 52,
		),
	),
);
```