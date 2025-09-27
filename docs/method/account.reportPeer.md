# account.reportPeer

**Description** : *Report a peer for violation of telegram&#039;s Terms of Service*

**Layer** : 214

```tl
account.reportPeer#c5ba3d86 peer:InputPeer reason:ReportReason message:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer to report |
| <mark>reason</mark> | [`ReportReason`](type/ReportReason) | The reason why this peer is being reported |
| <mark>message</mark> | [`string`](type/string) | Comment for report moderation |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->account->reportPeer(
	peer : $client->inputPeerEmpty(),
	reason : $client->inputReportReasonSpam(),
	message : 'DhVzHj0dil5ckxF8',
);
```