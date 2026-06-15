# stats.getPollStats

**Layer** : 227

```tl
stats.getPollStats#c27dfa68 flags:# dark:flags.0?true peer:InputPeer msg_id:int = stats.PollStats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **dark** | [`flags.0?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>msg_id</mark> | [`int`](type/int) | NOTHING |

---

## Result

[stats.PollStats](type/stats.PollStats)

---

## Example

```php
$statsPollStats = $client->stats->getPollStats(
	dark : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 6,
);
```