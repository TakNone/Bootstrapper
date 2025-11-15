# updateMonoForumNoPaidException

**Description** : *An admin has \(un\)exempted this monoforum topic &raquo; from payment to send messages using account\.toggleNoPaidMessagesException*

**Layer** : 216

```tl
updateMonoForumNoPaidException#9f812b08 flags:# exception:flags.0?true channel_id:long saved_peer_id:Peer = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **exception** | [`flags.0?true`](type/true) | If set, an admin has exempted this peer, otherwise the peer was unexempted |
| <mark>channel_id</mark> | [`long`](type/long) | The monoforum ID |
| <mark>saved_peer_id</mark> | [`Peer`](type/Peer) | The peer/topic ID |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateMonoForumNoPaidException(
	exception : true,
	channel_id : -2148107957851482971,
	saved_peer_id : $client->peerUser(
		user_id : -2031473101177535861,
	),
);
```