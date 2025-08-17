# messages.emojiGroups

**Description** : *Represents a list of emoji categories*

**Layer** : 211

```tl
messages.emojiGroups#881fb94b hash:int groups:Vector<EmojiGroup> = messages.EmojiGroups;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |
| <mark>groups</mark> | [`Vector<EmojiGroup>`](type/EmojiGroup) | A list of emoji categories |

---

## Type

[messages.EmojiGroups](type/messages.EmojiGroups)

---

## Example

```php
$messagesEmojiGroups = $client->messages->emojiGroups(
	hash : 61,
	groups : array(
		$client->emojiGroup(
			title : '4XCVUeiZ7DumSnsF',
			icon_emoji_id : 4670361136049810272,
			emoticons : array('SyXvao3RNpOlLKmW'),
		),
		$client->emojiGroupGreeting(
			title : 'NgKWVYi1tOhIPFor',
			icon_emoji_id : -7560298002019068999,
			emoticons : array('EMbuNYRWTsG0tw9d'),
		),
		$client->emojiGroupPremium(
			title : 'L5KTziW0eFJkRIsG',
			icon_emoji_id : -8408370109562170369,
		),
	),
);
```