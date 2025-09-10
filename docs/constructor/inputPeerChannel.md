# inputPeerChannel

**Description** : *Defines a channel for further interaction*

**Layer** : 214

```tl
inputPeerChannel#27bcbbfc channel_id:long access_hash:long = InputPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel_id</mark> | [`long`](type/long) | Channel identifier |
| <mark>access_hash</mark> | [`long`](type/long) | access_hash value from the channel constructor |

---

## Type

[InputPeer](type/InputPeer)

---

## Example

```php
$inputPeer = $client->inputPeerChannel(
	channel_id : -3519319374806592664,
	access_hash : 3865496874317959521,
);
```