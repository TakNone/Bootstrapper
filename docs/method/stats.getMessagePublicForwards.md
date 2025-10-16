# stats.getMessagePublicForwards

**Description** : *Obtains a list of messages, indicating to which other public channels was a channel message forwarded\.
Will return a list of messages with peer\_id equal to the public channel to which this message was forwarded*

**Layer** : 216

```tl
stats.getMessagePublicForwards#5f150144 channel:InputChannel msg_id:int offset:string limit:int = stats.PublicForwards;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Source channel |
| <mark>msg_id</mark> | [`int`](type/int) | Source message ID |
| <mark>offset</mark> | [`string`](type/string) | Offset for pagination, empty string on first call, then use the next_offset field of the returned constructor (if present, otherwise no more results are available) |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[stats.PublicForwards](type/stats.PublicForwards)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$statsPublicForwards = $client->stats->getMessagePublicForwards(
	channel : $client->inputChannelEmpty(),
	msg_id : 87,
	offset : '8pq5eyzMDZadC6Lt',
	limit : 85,
);
```