# channelParticipantLeft

**Description** : *A participant that left the channel/supergroup*

**Layer** : 233

```tl
channelParticipantLeft#1b03f006 peer:Peer = ChannelParticipant;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer that left |

---

## Type

[ChannelParticipant](type/ChannelParticipant)

---

## Example

```php
$channelParticipant = $client->channelParticipantLeft(
	peer : $client->peerUser(
		user_id : -694684861034441472,
	),
);
```