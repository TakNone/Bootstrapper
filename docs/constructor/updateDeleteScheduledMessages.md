# updateDeleteScheduledMessages

**Description** : *Some scheduled messages were deleted \(or sent\) from the schedule queue of a chat*

**Layer** : 216

```tl
updateDeleteScheduledMessages#f2a71983 flags:# peer:Peer messages:Vector<int> sent_messages:flags.0?Vector<int> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`Peer`](type/Peer) | Peer |
| <mark>messages</mark> | [`Vector<int>`](type/int) | Deleted scheduled messages |
| **sent_messages** | [`flags.0?Vector<int>`](type/int) | If set, this update indicates that some scheduled messages were sent (not simply deleted from the schedule queue).  In this case, the messages field will contain the scheduled message IDs for the sent messages (initially returned in updateNewScheduledMessage), and sent_messages will contain the real message IDs for the sent messages |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateDeleteScheduledMessages(
	peer : $client->peerUser(
		user_id : -8879222025408496546,
	),
	messages : array(60),
	sent_messages : array(55),
);
```