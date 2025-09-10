# messages.emojiGroups

**Description** : *Represents a list of emoji categories*

**Layer** : 214

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
			title : 'g1rudxFkj3sAIbSN',
			icon_emoji_id : 3504543315037985419,
			emoticons : array('ZWT9kFljbnzXuHY3'),
		),
		$client->emojiGroupGreeting(
			title : 'ne4ADE5X9lBVYrMW',
			icon_emoji_id : 2144960623212831176,
			emoticons : array('o7fqDRbHIeaAQrsM'),
		),
		$client->emojiGroupPremium(
			title : 'yQhGv4EdaLoVufYB',
			icon_emoji_id : 4759795297196146404,
		),
	),
);
```