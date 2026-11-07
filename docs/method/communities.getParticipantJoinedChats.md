# communities.getParticipantJoinedChats

**Layer** : 233

```tl
communities.getParticipantJoinedChats#f87eabab community:InputChannel participant:InputPeer = communities.ParticipantJoinedChats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>community</mark> | [`InputChannel`](type/InputChannel) | NOTHING |
| <mark>participant</mark> | [`InputPeer`](type/InputPeer) | NOTHING |

---

## Result

[communities.ParticipantJoinedChats](type/communities.ParticipantJoinedChats)

---

## Example

```php
$communitiesParticipantJoinedChats = $client->communities->getParticipantJoinedChats(
	community : $client->get_input_channel(channel : '@LiveProto'),
	participant : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```