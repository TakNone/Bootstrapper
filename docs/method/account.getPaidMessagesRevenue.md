# account.getPaidMessagesRevenue

**Layer** : 211

```tl
account.getPaidMessagesRevenue#19ba4a67 flags:# parent_peer:flags.0?InputPeer user_id:InputUser = account.PaidMessagesRevenue;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **parent_peer** | [`flags.0?InputPeer`](type/InputPeer) | NOTHING |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | NOTHING |

---

## Result

[account.PaidMessagesRevenue](type/account.PaidMessagesRevenue)

---

## Example

```php
$accountPaidMessagesRevenue = $client->account->getPaidMessagesRevenue(
	parent_peer : $client->inputPeerEmpty(),
	user_id : $client->inputUserEmpty(),
);
```