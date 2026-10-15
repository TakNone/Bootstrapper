# stats.getPollStats

**Description** : *Get statistics for a poll sent in a message*

**Layer** : 229

```tl
stats.getPollStats#c27dfa68 flags:# dark:flags.0?true peer:InputPeer msg_id:int = stats.PollStats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **dark** | [`flags.0?true`](type/true) | Whether to enable dark theme for graph colors |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer where the poll was sent |
| <mark>msg_id</mark> | [`int`](type/int) | ID of the message containing the poll |

---

## Result

[stats.PollStats](type/stats.PollStats)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$statsPollStats = $client->stats->getPollStats(
	dark : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 19,
);
```