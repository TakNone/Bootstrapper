# messages.checkHistoryImportPeer

**Description** : *Check whether chat history exported from another chat app can be imported into a specific Telegram chat, click here for more info »*

**Layer** : 211

```tl
messages.checkHistoryImportPeer#5dc60f03 peer:InputPeer = messages.CheckedHistoryImportPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The chat where we want to import history » |

---

## Result

[messages.CheckedHistoryImportPeer](type/messages.CheckedHistoryImportPeer)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **USER_NOT_MUTUAL_CONTACT** | `400` | The provided user is not a mutual contact |

---

## Example

```php
$messagesCheckedHistoryImportPeer = $client->messages->checkHistoryImportPeer(
	peer : $client->inputPeerEmpty(),
);
```