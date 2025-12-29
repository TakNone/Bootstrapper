# messages.togglePeerTranslations

**Description** : *Show or hide the real\-time chat translation popup for a certain chat*

**Layer** : 218

```tl
messages.togglePeerTranslations#e47cb579 flags:# disabled:flags.0?true peer:InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **disabled** | [`flags.0?true`](type/true) | Whether to disable or enable the real-time chat translation popup |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->messages->togglePeerTranslations(
	disabled : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```