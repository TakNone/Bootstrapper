# channels.reorderPinnedForumTopics

**Description** : *Reorder pinned forum topics*

**Layer** : 216

```tl
channels.reorderPinnedForumTopics#2950a18f flags:# force:flags.0?true channel:InputChannel order:Vector<int> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **force** | [`flags.0?true`](type/true) | If not set, the order of only the topics present both server-side and in order will be changed (i.e. mentioning topics not pinned server-side in order will not pin them, and not mentioning topics pinned server-side will not unpin them).  If set, the entire server-side pinned topic list will be replaced with order (i.e. mentioning topics not pinned server-side in order will pin them, and not mentioning topics pinned server-side will unpin them) |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Supergroup ID |
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
$updates = $client->channels->reorderPinnedForumTopics(
	force : true,
	channel : $client->inputChannelEmpty(),
	order : array(31),
);
```