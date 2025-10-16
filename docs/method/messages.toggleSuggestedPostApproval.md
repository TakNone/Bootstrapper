# messages.toggleSuggestedPostApproval

**Description** : *Approve or reject a suggested post &raquo;*

**Layer** : 216

```tl
messages.toggleSuggestedPostApproval#8107455c flags:# reject:flags.1?true peer:InputPeer msg_id:int schedule_date:flags.0?int reject_comment:flags.2?string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **reject** | [`flags.1?true`](type/true) | Reject the suggested post |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Both for users and channels, must contain the ID of the direct messages monoforum » (for channels, the topic ID is extracted automatically from the msg_id) |
| <mark>msg_id</mark> | [`int`](type/int) | ID of the suggestion message |
| **schedule_date** | [`flags.0?int`](type/int) | Custom scheduling date |
| **reject_comment** | [`flags.2?string`](type/string) | Optional comment for rejections (can only be used if reject is set) |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$updates = $client->messages->toggleSuggestedPostApproval(
	reject : true,
	peer : $client->inputPeerEmpty(),
	msg_id : 17,
	schedule_date : 75,
	reject_comment : 'm0l1yJacAigD3QG2',
);
```