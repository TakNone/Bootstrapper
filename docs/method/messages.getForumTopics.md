# messages.getForumTopics

**Layer** : 218

```tl
messages.getForumTopics#3ba47bff flags:# peer:InputPeer q:flags.0?string offset_date:int offset_id:int offset_topic:int limit:int = messages.ForumTopics;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
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
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	q : 'Z5jhrvbtMedPaSsF',
	offset_date : 0,
	offset_id : 0,
	offset_topic : 0,
	limit : 25,
);
```