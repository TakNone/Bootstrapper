# account.emojiStatuses

**Description** : *A list of emoji statuses*

**Layer** : 216

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
			document_id : -1944351746068866785,
			until : 12,
		),
		$client->emojiStatusCollectible(
			collectible_id : 6430009297445415483,
			document_id : 4127036559185320925,
			title : 'R4FZSCEbsy6JN7P8',
			slug : 'VYpcxelTLfbEIAig',
			pattern_document_id : 3003795267829190723,
			center_color : 90,
			edge_color : 35,
			pattern_color : 88,
			text_color : 2,
			until : 40,
		),
		$client->inputEmojiStatusCollectible(
			collectible_id : 8794646865904819134,
			until : 11,
		),
	),
);
```