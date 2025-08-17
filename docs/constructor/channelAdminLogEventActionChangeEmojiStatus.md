# channelAdminLogEventActionChangeEmojiStatus

**Description** : *The emoji status was changed*

**Layer** : 211

```tl
channelAdminLogEventActionChangeEmojiStatus#3ea9feb1 prev_value:EmojiStatus new_value:EmojiStatus = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_value</mark> | [`EmojiStatus`](type/EmojiStatus) | Previous emoji status |
| <mark>new_value</mark> | [`EmojiStatus`](type/EmojiStatus) | New emoji status |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionChangeEmojiStatus(
	prev_value : $client->emojiStatusEmpty(),
	new_value : $client->emojiStatusEmpty(),
);
```