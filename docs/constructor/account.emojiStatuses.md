# account.emojiStatuses

**Description** : *A list of emoji statuses*

**Layer** : 211

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
	hash : -9118679831415820816,
	statuses : array(
		$client->emojiStatusEmpty(),
		$client->emojiStatus(
			document_id : 522688134555040276,
			until : 28,
		),
		$client->emojiStatusCollectible(
			collectible_id : 6809506486357711041,
			document_id : -1066293243627673657,
			title : 'sQEfYKvpMum9aytz',
			slug : 'O4vakJxRLoFerlHw',
			pattern_document_id : -8051055673303604387,
			center_color : 9,
			edge_color : 91,
			pattern_color : 10,
			text_color : 35,
			until : 96,
		),
		$client->inputEmojiStatusCollectible(
			collectible_id : 3293291621956029427,
			until : 69,
		),
	),
);
```