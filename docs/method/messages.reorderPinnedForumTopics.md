# messages.reorderPinnedForumTopics

**Description** : *Reorder pinned forum topics*

**Layer** : 229

```tl
messages.reorderPinnedForumTopics#e7841f0 flags:# force:flags.0?true peer:InputPeer order:Vector<int> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **force** | [`flags.0?true`](type/true) | If not set, the order of only the topics present both server-side and in order will be changed (i.e. mentioning topics not pinned server-side in order will not pin them, and not mentioning topics pinned server-side will not unpin them).  If set, the entire server-side pinned topic list will be replaced with order (i.e. mentioning topics not pinned server-side in order will pin them, and not mentioning topics pinned server-side will unpin them) |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The supergroup forum, private chat (for forum-enabled bots) or bot forum (for users) where the topic is located |
| <mark>order</mark> | [`Vector<int>`](type/int) | Topic IDs » |

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
$updates = $client->messages->reorderPinnedForumTopics(
	force : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	order : array(40),
);
```