# premium.applyBoost

**Description** : *Apply one or more boosts » to a peer*

**Layer** : 211

```tl
premium.applyBoost#6b7da746 flags:# slots:flags.0?Vector<int> peer:InputPeer = premium.MyBoosts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **slots** | [`flags.0?Vector<int>`](type/int) | Which boost slots to assign to this peer |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer to boost |

---

## Result

[premium.MyBoosts](type/premium.MyBoosts)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOOSTS_EMPTY** | `400` | No boost slots were specified |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **SLOTS_EMPTY** | `400` | The specified slot list is empty |

---

## Example

```php
$premiumMyBoosts = $client->premium->applyBoost(
	slots : array(27),
	peer : $client->inputPeerEmpty(),
);
```