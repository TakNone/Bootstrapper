# account.reportProfilePhoto

**Description** : *Report a profile photo of a dialog*

**Layer** : 216

```tl
account.reportProfilePhoto#fa8cc6f5 peer:InputPeer photo_id:InputPhoto reason:ReportReason message:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The dialog |
| <mark>photo_id</mark> | [`InputPhoto`](type/InputPhoto) | Dialog photo ID |
| <mark>reason</mark> | [`ReportReason`](type/ReportReason) | Report reason |
| <mark>message</mark> | [`string`](type/string) | Comment for report moderation |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->account->reportProfilePhoto(
	peer : $client->inputPeerEmpty(),
	photo_id : $client->inputPhotoEmpty(),
	reason : $client->inputReportReasonSpam(),
	message : 'GZP41NCvwVI9nJea',
);
```