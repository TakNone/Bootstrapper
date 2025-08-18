# messages.setHistoryTTL

**Description** : *Set maximum Time\-To\-Live of all messages in the specified chat*

**Layer** : 211

```tl
messages.setHistoryTTL#b80e5fe4 peer:InputPeer period:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The dialog |
| <mark>period</mark> | [`int`](type/int) | Automatically delete all messages sent in the chat after this many seconds |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **TTL_PERIOD_INVALID** | `400` | The specified TTL period is invalid |

---

## Example

```php
$updates = $client->messages->setHistoryTTL(
	peer : $client->inputPeerEmpty(),
	period : 97,
);
```