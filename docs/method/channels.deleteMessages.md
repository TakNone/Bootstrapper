# channels.deleteMessages

**Description** : *Delete messages in a channel/supergroup*

**Layer** : 218

```tl
channels.deleteMessages#84c1fd4e channel:InputChannel id:Vector<int> = messages.AffectedMessages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Channel/supergroup |
| <mark>id</mark> | [`Vector<int>`](type/int) | IDs of messages to delete |

---

## Result

[messages.AffectedMessages](type/messages.AffectedMessages)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **FROZEN_METHOD_INVALID** | `420` | The current account is frozen, and thus cannot execute the specified action |
| **MESSAGE_DELETE_FORBIDDEN** | `403` | You can't delete one of the messages you tried to delete, most likely because it is a service message |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |

---

## Example

```php
$messagesAffectedMessages = $client->channels->deleteMessages(
	channel : $client->get_input_channel(channel : '@LiveProto'),
	id : array(13),
);
```