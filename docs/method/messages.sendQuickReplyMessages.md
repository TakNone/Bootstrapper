# messages.sendQuickReplyMessages

**Description** : *Send a quick reply shortcut &raquo;*

**Layer** : 211

```tl
messages.sendQuickReplyMessages#6c750de1 peer:InputPeer shortcut_id:int id:Vector<int> random_id:Vector<long> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer where to send the shortcut (users only, for now) |
| <mark>shortcut_id</mark> | [`int`](type/int) | The ID of the quick reply shortcut to send |
| <mark>id</mark> | [`Vector<int>`](type/int) | Specify a subset of messages from the shortcut to send; if empty, defaults to all of them |
| <mark>random_id</mark> | [`Vector<long>`](type/long) | Unique client IDs required to prevent message resending, one for each message we're sending, may be empty (but not recommended) |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |

---

## Example

```php
$updates = $client->messages->sendQuickReplyMessages(
	peer : $client->inputPeerEmpty(),
	shortcut_id : 25,
	id : array(77),
	random_id : array(8127439423535653347),
);
```