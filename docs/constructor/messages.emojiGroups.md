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
	hash : 96,
	groups : array(
		$client->emojiGroup(
			title : 'Dq1NoZYs9apmczLF',
			icon_emoji_id : -4104070671275957457,
			emoticons : array('wDQCau2Aok17ryN5'),
		),
		$client->emojiGroupGreeting(
			title : 'OzitmPgdyhBC3qo4',
			icon_emoji_id : 7232687334202410334,
			emoticons : array('5vXnfPZ6hpqA70QW'),
		),
		$client->emojiGroupPremium(
			title : '5bpz7kqOlLwfR0Ed',
			icon_emoji_id : -2773942564643390952,
		),
	),
);
```