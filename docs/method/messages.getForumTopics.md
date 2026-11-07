# messages.getForumTopics

**Description** : *Get topics of a forum*

**Layer** : 229

```tl
messages.getForumTopics#3ba47bff flags:# peer:InputPeer q:flags.0?string offset_date:int offset_id:int offset_topic:int limit:int = messages.ForumTopics;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The supergroup forum, private chat (for forum-enabled bots) or bot forum (for users) where the topic is located |
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

---

## Example

```php
$messagesForumTopics = $client->messages->getForumTopics(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	q : 'nh682p5VCRqktLam',
	offset_date : 0,
	offset_id : 0,
	offset_topic : 0,
	limit : 97,
);
```