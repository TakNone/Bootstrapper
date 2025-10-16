# messages.getForumTopics

**Layer** : 216

```tl
messages.getForumTopics#3ba47bff flags:# peer:InputPeer q:flags.0?string offset_date:int offset_id:int offset_topic:int limit:int = messages.ForumTopics;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| **q** | [`flags.0?string`](type/string) | NOTHING |
| <mark>offset_date</mark> | [`int`](type/int) | NOTHING |
| <mark>offset_id</mark> | [`int`](type/int) | NOTHING |
| <mark>offset_topic</mark> | [`int`](type/int) | NOTHING |
| <mark>limit</mark> | [`int`](type/int) | NOTHING |

---

## Result

[messages.ForumTopics](type/messages.ForumTopics)

---

## Example

```php
$messagesForumTopics = $client->messages->getForumTopics(
	peer : $client->inputPeerEmpty(),
	q : 'fQJWU0nt8HZamyqh',
	offset_date : 0,
	offset_id : 0,
	offset_topic : 0,
	limit : 88,
);
```