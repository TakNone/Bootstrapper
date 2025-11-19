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
			document_id : -2937951774499724771,
			until : 30,
		),
		$client->emojiStatusCollectible(
			collectible_id : 1701731573515797747,
			document_id : 9170252907974506884,
			title : 'jCXEyYKc3RguQk6B',
			slug : 'hMeyLA6aICDZVHtz',
			pattern_document_id : -7120563842108725147,
			center_color : 77,
			edge_color : 93,
			pattern_color : 84,
			text_color : 50,
			until : 40,
		),
		$client->inputEmojiStatusCollectible(
			collectible_id : 8519425022531997668,
			until : 93,
		),
	),
);
```