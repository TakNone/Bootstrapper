# channels.readMessageContents

**Description** : *Mark channel/supergroup message contents as read, emitting an updateChannelReadMessagesContents*

**Layer** : 216

```tl
channels.readMessageContents#eab5dc38 channel:InputChannel id:Vector<int> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Channel/supergroup |
| <mark>id</mark> | [`Vector<int>`](type/int) | IDs of messages whose contents should be marked as read |

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
$bool = $client->channels->readMessageContents(
	channel : $client->inputChannelEmpty(),
	id : array(42),
);
```