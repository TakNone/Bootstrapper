# messages.emojiGroups

**Description** : *Represents a list of emoji categories*

**Layer** : 218

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
			title : 'whCFGV3aOdpym7tL',
			icon_emoji_id : -3825356949961020518,
			emoticons : array('CHc60LBu1GeilSmt'),
		),
		$client->emojiGroupGreeting(
			title : 'V1jnuA2GBJpFfkI7',
			icon_emoji_id : -710065040174667147,
			emoticons : array('1v0NnIUoK7xZs8cB'),
		),
		$client->emojiGroupPremium(
			title : 'ElypTUtoHWLCfs7z',
			icon_emoji_id : 8508145128178245610,
		),
	),
);
```