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
			title : '9lO1fZqnsJItRz7d',
			icon_emoji_id : 6756015692476193730,
			emoticons : array('JWYtMbSHGT2fwONd'),
		),
		$client->emojiGroupGreeting(
			title : 'zpNJlmutQTXOSaLv',
			icon_emoji_id : -1888708432759961492,
			emoticons : array('KbcvtulXYEHROosS'),
		),
		$client->emojiGroupPremium(
			title : 'Mc1szen0B3JxSouD',
			icon_emoji_id : -1439612602003478805,
		),
	),
);
```