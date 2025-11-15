# account.getPaidMessagesRevenue

**Description** : *Get the number of stars we have received from the specified user thanks to paid messages &raquo;; the received amount will be equal to the sent amount multiplied by stars\_paid\_message\_commission\_permille divided by 1000*

**Layer** : 216

```tl
account.getPaidMessagesRevenue#19ba4a67 flags:# parent_peer:flags.0?InputPeer user_id:InputUser = account.PaidMessagesRevenue;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **parent_peer** | [`flags.0?InputPeer`](type/InputPeer) | If set, can contain the ID of a monoforum (channel direct messages) to obtain the number of stars the user has spent to send us direct messages via the channel |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | The user that paid to send us messages |

---

## Result

[account.PaidMessagesRevenue](type/account.PaidMessagesRevenue)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PARENT_PEER_INVALID** | `400` | The specified parent_peer is invalid |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$accountPaidMessagesRevenue = $client->account->getPaidMessagesRevenue(
	parent_peer : $client->inputPeerEmpty(),
	user_id : $client->inputUserEmpty(),
);
```