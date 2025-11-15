# payments.getSavedStarGifts

**Description** : *Fetch the full list of gifts owned by a peer*

**Layer** : 216

```tl
payments.getSavedStarGifts#a319e569 flags:# exclude_unsaved:flags.0?true exclude_saved:flags.1?true exclude_unlimited:flags.2?true exclude_unique:flags.4?true sort_by_value:flags.5?true exclude_upgradable:flags.7?true exclude_unupgradable:flags.8?true peer_color_available:flags.9?true exclude_hosted:flags.10?true peer:InputPeer collection_id:flags.6?int offset:string limit:int = payments.SavedStarGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **exclude_unsaved** | [`flags.0?true`](type/true) | Exclude gifts not pinned on the profile |
| **exclude_saved** | [`flags.1?true`](type/true) | Exclude gifts pinned on the profile |
| **exclude_unlimited** | [`flags.2?true`](type/true) | Exclude gifts that do not have the starGift.limited flag set |
| **exclude_unique** | [`flags.4?true`](type/true) | Exclude collectible gifts » |
| **sort_by_value** | [`flags.5?true`](type/true) | If set, sorts the gifts by price instead of reception date |
| **exclude_upgradable** | [`flags.7?true`](type/true) | Exclude gifts that can be upgraded to collectible gifts » |
| **exclude_unupgradable** | [`flags.8?true`](type/true) | Exclude gifts that cannot be upgraded to collectible gifts » |
| **peer_color_available** | [`flags.9?true`](type/true) | NOTHING |
| **exclude_hosted** | [`flags.10?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Fetch only gifts owned by the specified peer, such as: a user, with peer=inputPeerUser; a channel, with peer=inputPeerChannel; a connected business user (when executing the method as a bot, over the business connection), with peer=inputPeerUser |
| **collection_id** | [`flags.6?int`](type/int) | Only returns gifts within the specified collection » |
| <mark>offset</mark> | [`string`](type/string) | Offset for pagination |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[payments.SavedStarGifts](type/payments.SavedStarGifts)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BUSINESS_CONNECTION_INVALID** | `400` | The connection_id passed to the wrapping invokeWithBusinessConnection call is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$paymentsSavedStarGifts = $client->payments->getSavedStarGifts(
	exclude_unsaved : true,
	exclude_saved : true,
	exclude_unlimited : true,
	exclude_unique : true,
	sort_by_value : true,
	exclude_upgradable : true,
	exclude_unupgradable : true,
	peer_color_available : true,
	exclude_hosted : true,
	peer : $client->inputPeerEmpty(),
	collection_id : 78,
	offset : '2bjY435AIgyPUpdw',
	limit : 48,
);
```