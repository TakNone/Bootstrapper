# messages.emojiGroups

**Description** : *Represents a list of emoji categories*

**Layer** : 222

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
	hash : 0,
	groups : array(
		$client->emojiGroup(
			title : '3cBuf4mJgrZvLeFq',
			icon_emoji_id : -7961905069471159292,
			emoticons : array('TYkzEQB0Uxj9KvMW'),
		),
		$client->emojiGroupGreeting(
			title : 'xFUpkzMJo872dyir',
			icon_emoji_id : -4339111946416898147,
			emoticons : array('wsEGAzO72bFpBUjv'),
		),
		$client->emojiGroupPremium(
			title : 'jQoSbxnqdkgULcYa',
			icon_emoji_id : -1926226962607167273,
		),
	),
);
```