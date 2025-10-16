# channelParticipantLeft

**Description** : *A participant that left the channel/supergroup*

**Layer** : 216

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
		user_id : 1094407550650927891,
	),
);
```