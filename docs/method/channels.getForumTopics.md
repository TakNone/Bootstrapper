# channels.getForumTopics

**Description** : *Get topics of a forum*

**Layer** : 211

```tl
channels.getForumTopics#de560d1 flags:# channel:InputChannel q:flags.0?string offset_date:int offset_id:int offset_topic:int limit:int = messages.ForumTopics;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Supergroup |
| **q** | [`flags.0?string`](type/string) | Search query |
| <mark>offset_date</mark> | [`int`](type/int) | Offsets for pagination, for more info click here, date of the last message of the last found topic. Use 0 or any date in the future to get results from the last topic |
| <mark>offset_id</mark> | [`int`](type/int) | Offsets for pagination, for more info click here, ID of the last message of the last found topic (or initially 0) |
| <mark>offset_topic</mark> | [`int`](type/int) | Offsets for pagination, for more info click here, ID of the last found topic (or initially 0) |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination. For optimal performance, the number of returned topics is chosen by the server and can be smaller than the specified limit |

---

## Result

[messages.ForumTopics](type/messages.ForumTopics)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_FORUM_MISSING** | `400` | This supergroup is not a forum |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |

---

## Example

```php
$messagesForumTopics = $client->channels->getForumTopics(
	channel : $client->inputChannelEmpty(),
	q : 'bseKQug5wcSWXOIL',
	offset_date : 47,
	offset_id : 36,
	offset_topic : 65,
	limit : 92,
);
```