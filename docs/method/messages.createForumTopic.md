# messages.createForumTopic

**Description** : *Create a forum topic*

**Layer** : 233

```tl
messages.createForumTopic#2f98c3d5 flags:# title_missing:flags.4?true peer:InputPeer title:string icon_color:flags.0?int icon_emoji_id:flags.3?long random_id:long send_as:flags.2?InputPeer = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **title_missing** | [`flags.4?true`](type/true) | If set, the topic has no user-defined title, can only be set for the per-user topics of bot forums; if this field is set, the topic title likely needs to be changed by the bot |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The supergroup, private chat (for forum-enabled bots) or forum bot (for users) where to create the topic |
| <mark>title</mark> | [`string`](type/string) | Topic title (maximum UTF-8 length: 128) |
| **icon_color** | [`flags.0?int`](type/int) | If no custom emoji icon is specified, specifies the color of the fallback topic icon (RGB), one of 0x6FB9F0, 0xFFD67E, 0xCB86DB, 0x8EEE98, 0xFF93B2, or 0xFB6F5F |
| **icon_emoji_id** | [`flags.3?long`](type/long) | ID of the custom emoji used as topic icon. Telegram Premium users can use any custom emoji, other users can only use the custom emojis contained in the inputStickerSetEmojiDefaultTopicIcons emoji pack |
| <mark>random_id</mark> | [`long`](type/long) | Unique client message ID to prevent duplicate sending of the same event. See here » for more info on random ID deduplication and updateMessageID mapping |
| **send_as** | [`flags.2?InputPeer`](type/InputPeer) | Create the topic as the specified peer |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_FORUM_CREATE_FORBIDDEN** | `403` | Since the bot's user.bot_forum_can_manage_topics flag is not set, the user cannot create or modify bot forum topics |
| **CHANNEL_FORUM_MISSING** | `400` | This supergroup is not a forum |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |

---

## Example

```php
$updates = $client->messages->createForumTopic(
	title_missing : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	title : 'VepwGEzPKdvj5QOm',
	icon_color : 40,
	icon_emoji_id : 387241911717306995,
	random_id : 1619038320179074324,
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```