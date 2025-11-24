# messages.editForumTopic

**Layer** : 218

```tl
messages.editForumTopic#cecc1134 flags:# peer:InputPeer topic_id:int title:flags.0?string icon_emoji_id:flags.1?long closed:flags.2?Bool hidden:flags.3?Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>topic_id</mark> | [`int`](type/int) | NOTHING |
| **title** | [`flags.0?string`](type/string) | NOTHING |
| **icon_emoji_id** | [`flags.1?long`](type/long) | NOTHING |
| **closed** | [`flags.2?Bool`](type/Bool) | NOTHING |
| **hidden** | [`flags.3?Bool`](type/Bool) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->editForumTopic(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	topic_id : 46,
	title : 'V4flXWeO9SLwqDz3',
	icon_emoji_id : 1282068250343703602,
	closed : true,
	hidden : true,
);
```