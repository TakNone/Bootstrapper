# updateChannelPinnedTopics

**Description** : *The pinned topics of a forum have changed*

**Layer** : 211

```tl
updateChannelPinnedTopics#fe198602 flags:# channel_id:long order:flags.0?Vector<int> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>channel_id</mark> | [`long`](type/long) | Forum ID |
| **order** | [`flags.0?Vector<int>`](type/int) | Ordered list containing the IDs of all pinned topics |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChannelPinnedTopics(
	channel_id : -8082097384697056198,
	order : array(40),
);
```