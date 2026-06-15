# messages.emojiGroups

**Description** : *Represents a list of emoji categories*

**Layer** : 227

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
			title : 'cOeP2YBLNWlgFQ0Z',
			icon_emoji_id : -2407373360602311587,
			emoticons : array('YpqnxtBwGgPmivo1'),
		),
		$client->emojiGroupGreeting(
			title : '2GAEXx3ohnIT7rgc',
			icon_emoji_id : -7768473503839186120,
			emoticons : array('0HylXPNuTwzQjoKO'),
		),
		$client->emojiGroupPremium(
			title : '1ySu63B85UQT9IOg',
			icon_emoji_id : 4948296426170889296,
		),
	),
);
```