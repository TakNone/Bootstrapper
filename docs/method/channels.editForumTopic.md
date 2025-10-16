# channels.editForumTopic

**Description** : *Edit forum topic; requires manage\_topics rights*

**Layer** : 216

```tl
channels.editForumTopic#f4dfa185 flags:# channel:InputChannel topic_id:int title:flags.0?string icon_emoji_id:flags.1?long closed:flags.2?Bool hidden:flags.3?Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Supergroup |
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
| **CHANNEL_FORUM_MISSING** | `400` | This supergroup is not a forum |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHAT_ADMIN_REQUIRED** | `403` | You must be an admin in this chat to do this |
| **DOCUMENT_INVALID** | `400` | The specified document is invalid |
| **GENERAL_MODIFY_ICON_FORBIDDEN** | `400` | You can't modify the icon of the "General" topic |
| **TOPIC_CLOSE_SEPARATELY** | `400` | The close flag cannot be provided together with any of the other flags |
| **TOPIC_HIDE_SEPARATELY** | `400` | The hide flag cannot be provided together with any of the other flags |
| **TOPIC_ID_INVALID** | `400` | The specified topic ID is invalid |
| **TOPIC_NOT_MODIFIED** | `400` | The updated topic info is equal to the current topic info, nothing was changed |

---

## Example

```php
$updates = $client->channels->editForumTopic(
	channel : $client->inputChannelEmpty(),
	topic_id : 34,
	title : 'HqNZ7zoWYi2beAvt',
	icon_emoji_id : 7871680982792494878,
	closed : false,
	hidden : true,
);
```