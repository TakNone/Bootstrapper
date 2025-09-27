# channels.updatePinnedForumTopic

**Description** : *Pin or unpin forum topics*

**Layer** : 214

```tl
channels.updatePinnedForumTopic#6c2d9026 channel:InputChannel topic_id:int pinned:Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Supergroup ID |
| <mark>topic_id</mark> | [`int`](type/int) | Forum topic ID |
| <mark>pinned</mark> | [`Bool`](type/Bool) | Whether to pin or unpin the topic |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **TOPIC_ID_INVALID** | `400` | The specified topic ID is invalid |

---

## Example

```php
$updates = $client->channels->updatePinnedForumTopic(
	channel : $client->inputChannelEmpty(),
	topic_id : 56,
	pinned : false,
);
```