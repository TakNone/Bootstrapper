# communities.toggleParticipantBanned

**Layer** : 229

```tl
communities.toggleParticipantBanned#9967ad0f flags:# unban:flags.0?true community:InputChannel participant:InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **unban** | [`flags.0?true`](type/true) | NOTHING |
| <mark>community</mark> | [`InputChannel`](type/InputChannel) | NOTHING |
| <mark>participant</mark> | [`InputPeer`](type/InputPeer) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->communities->toggleParticipantBanned(
	unban : true,
	community : $client->get_input_channel(channel : '@LiveProto'),
	participant : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```