# channels.readHistory

**Description** : *Mark channel/supergroup history as read*

**Layer** : 218

```tl
channels.readHistory#cc104937 channel:InputChannel max_id:int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Channel/supergroup |
| <mark>max_id</mark> | [`int`](type/int) | ID of message up to which messages should be marked as read |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |

---

## Example

```php
$bool = $client->channels->readHistory(
	channel : $client->get_input_channel(channel : '@LiveProto'),
	max_id : 62,
);
```