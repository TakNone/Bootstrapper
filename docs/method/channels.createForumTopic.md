# channels.createForumTopic

**Description** : *Create a forum topic; requires manage\_topics rights*

**Layer** : 211

```tl
channels.createForumTopic#f40c0224 flags:# channel:InputChannel title:string icon_color:flags.0?int icon_emoji_id:flags.3?long random_id:long send_as:flags.2?InputPeer = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | The forum |
| <mark>title</mark> | [`string`](type/string) | Topic title (maximum UTF-8 length: 128) |
| **icon_color** | [`flags.0?int`](type/int) | If no custom emoji icon is specified, specifies the color of the fallback topic icon (RGB), one of 0x6FB9F0, 0xFFD67E, 0xCB86DB, 0x8EEE98, 0xFF93B2, or 0xFB6F5F |
| **icon_emoji_id** | [`flags.3?long`](type/long) | ID of the custom emoji used as topic icon. Telegram Premium users can use any custom emoji, other users can only use the custom emojis contained in the inputStickerSetEmojiDefaultTopicIcons emoji pack |
| <mark>random_id</mark> | [`long`](type/long) | Unique client message ID to prevent duplicate sending of the same event |
| **send_as** | [`flags.2?InputPeer`](type/InputPeer) | Create the topic as the specified peer |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_FORUM_MISSING** | `400` | This supergroup is not a forum |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |
| **TOPIC_TITLE_EMPTY** | `400` | The specified topic title is empty |

---

## Example

```php
$updates = $client->channels->createForumTopic(
	channel : $client->inputChannelEmpty(),
	title : 'tMqNG7B64VgTIsAW',
	icon_color : 33,
	icon_emoji_id : -91095900795166164,
	random_id : -6419263639601658708,
	send_as : $client->inputPeerEmpty(),
);
```