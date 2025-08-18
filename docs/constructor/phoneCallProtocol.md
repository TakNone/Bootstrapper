# phoneCallProtocol

**Description** : *Protocol info for libtgvoip*

**Layer** : 211

```tl
phoneCallProtocol#fc878fc8 flags:# udp_p2p:flags.0?true udp_reflector:flags.1?true min_layer:int max_layer:int library_versions:Vector<string> = PhoneCallProtocol;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **udp_p2p** | [`flags.0?true`](type/true) | Whether to allow P2P connection to the other participant |
| **udp_reflector** | [`flags.1?true`](type/true) | Whether to allow connection to the other participants through the reflector servers |
| <mark>min_layer</mark> | [`int`](type/int) | Minimum layer for remote libtgvoip |
| <mark>max_layer</mark> | [`int`](type/int) | Maximum layer for remote libtgvoip |
| <mark>library_versions</mark> | [`Vector<string>`](type/string) | When using phone.requestCall and phone.acceptCall, specify all library versions supported by the client. The server will merge and choose the best library version supported by both peers, returning only the best value in the result of the callee's phone.acceptCall and in the phoneCallAccepted update received by the caller |

---

## Type

[PhoneCallProtocol](type/PhoneCallProtocol)

---

## Example

```php
$phoneCallProtocol = $client->phoneCallProtocol(
	udp_p2p : true,
	udp_reflector : true,
	min_layer : 0,
	max_layer : 54,
	library_versions : array('2fSXb0aD8pOZBIKw'),
);
```