# premium.getUserBoosts

**Description** : *Returns the lists of boost that were applied to a channel/supergroup by a specific user \(admins only\)*

**Layer** : 218

```tl
premium.getUserBoosts#39854d1f peer:InputPeer user_id:InputUser = premium.BoostsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The channel/supergroup |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | The user |

---

## Result

[premium.BoostsList](type/premium.BoostsList)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$premiumBoostsList = $client->premium->getUserBoosts(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	user_id : $client->get_input_user(user : '@TakNone'),
);
```