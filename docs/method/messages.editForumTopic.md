# messages.editForumTopic

**Description** : *Edit forum topic*

**Layer** : 229

```tl
messages.editForumTopic#cecc1134 flags:# peer:InputPeer topic_id:int title:flags.0?string icon_emoji_id:flags.1?long closed:flags.2?Bool hidden:flags.3?Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The supergroup forum, private chat (for forum-enabled bots) or bot forum (for users) where the topic is located |
| <mark>topic_id</mark> | [`int`](type/int) | Topic ID |
| **title** | [`flags.0?string`](type/string) | If present, will update the topic title (maximum UTF-8 length: 128) |
| **icon_emoji_id** | [`flags.1?long`](type/long) | If present, updates the custom emoji used as topic icon. Telegram Premium users can use any custom emoji, other users can only use the custom emojis contained in the inputStickerSetEmojiDefaultTopicIcons emoji pack. Pass 0 to switch to the fallback topic icon |
| **closed** | [`flags.2?Bool`](type/Bool) | If present, will update the open/closed status of the topic |
| **hidden** | [`flags.3?Bool`](type/Bool) | If present, will hide/unhide the topic (only valid for the "General" topic, id=1) |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **TOPIC_CLOSE_SEPARATELY** | `400` | The close flag cannot be provided together with any of the other flags |
| **TOPIC_NOT_MODIFIED** | `400` | The updated topic info is equal to the current topic info, nothing was changed |

---

## Example

```php
$updates = $client->messages->editForumTopic(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	topic_id : 37,
	title : 'wcdYmrkVeR4ML5zS',
	icon_emoji_id : -1914540370653110542,
	closed : true,
	hidden : true,
);
```