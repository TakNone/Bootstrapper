# messages.getExtendedMedia

**Description** : *Fetch updated information about paid media, see here &raquo; for the full flow*

**Layer** : 211

```tl
messages.getExtendedMedia#84f80814 peer:InputPeer id:Vector<int> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer with visible paid media messages |
| <mark>id</mark> | [`Vector<int>`](type/int) | IDs of currently visible messages containing paid media |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->getExtendedMedia(
	peer : $client->inputPeerEmpty(),
	id : array(98),
);
```