# channels.updateEmojiStatus

**Description** : *Set an emoji status for a channel or supergroup*

**Layer** : 211

```tl
channels.updateEmojiStatus#f0d3e6a8 channel:InputChannel emoji_status:EmojiStatus = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | The channel/supergroup, must have at least channel_emoji_status_level_min/group_emoji_status_level_min boosts |
| <mark>emoji_status</mark> | [`EmojiStatus`](type/EmojiStatus) | Emoji status to set |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |

---

## Example

```php
$updates = $client->channels->updateEmojiStatus(
	channel : $client->inputChannelEmpty(),
	emoji_status : $client->emojiStatusEmpty(),
);
```