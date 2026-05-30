# messages.emojiGroups

**Description** : *Represents a list of emoji categories*

**Layer** : 225

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
			title : 'S5DqPd0rFyMXEWjG',
			icon_emoji_id : 3449800529642176919,
			emoticons : array('mWOounzRCK1hxwd8'),
		),
		$client->emojiGroupGreeting(
			title : 'v916LuaNOZXVB2Aq',
			icon_emoji_id : -9029004579529835633,
			emoticons : array('bTzg7mGSwlqFeVsu'),
		),
		$client->emojiGroupPremium(
			title : 'UIl849pqkbePD32L',
			icon_emoji_id : 6485226852091974043,
		),
	),
);
```