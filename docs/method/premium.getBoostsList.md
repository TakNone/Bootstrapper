# premium.getBoostsList

**Description** : *Obtains info about the boosts that were applied to a certain channel or supergroup \(admins only\)*

**Layer** : 218

```tl
premium.getBoostsList#60f67660 flags:# gifts:flags.0?true peer:InputPeer offset:string limit:int = premium.BoostsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **gifts** | [`flags.0?true`](type/true) | Whether to return only info about boosts received from gift codes and giveaways created by the channel/supergroup » |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The channel/supergroup |
| <mark>offset</mark> | [`string`](type/string) | Offset for pagination, obtained from premium.boostsList.next_offset |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[premium.BoostsList](type/premium.BoostsList)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$premiumBoostsList = $client->premium->getBoostsList(
	gifts : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	offset : 'KsGhYcvfbDUA89dk',
	limit : 92,
);
```