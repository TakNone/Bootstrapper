# inputDialogPeerCommunity

**Layer** : 229

```tl
inputDialogPeerCommunity#69ef72c4 community:InputChannel = InputDialogPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>community</mark> | [`InputChannel`](type/InputChannel) | NOTHING |

---

## Type

[InputDialogPeer](type/InputDialogPeer)

---

## Example

```php
$inputDialogPeer = $client->inputDialogPeerCommunity(
	community : $client->get_input_channel(channel : '@LiveProto'),
);
```