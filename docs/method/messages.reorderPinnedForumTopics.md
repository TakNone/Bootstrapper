# messages.reorderPinnedForumTopics

**Layer** : 218

```tl
messages.reorderPinnedForumTopics#e7841f0 flags:# force:flags.0?true peer:InputPeer order:Vector<int> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **force** | [`flags.0?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>order</mark> | [`Vector<int>`](type/int) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->reorderPinnedForumTopics(
	force : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	order : array(48),
);
```