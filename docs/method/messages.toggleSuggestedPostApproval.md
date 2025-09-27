# messages.toggleSuggestedPostApproval

**Layer** : 216

```tl
messages.toggleSuggestedPostApproval#8107455c flags:# reject:flags.1?true peer:InputPeer msg_id:int schedule_date:flags.0?int reject_comment:flags.2?string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **reject** | [`flags.1?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>msg_id</mark> | [`int`](type/int) | NOTHING |
| **schedule_date** | [`flags.0?int`](type/int) | NOTHING |
| **reject_comment** | [`flags.2?string`](type/string) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->toggleSuggestedPostApproval(
	reject : true,
	peer : $client->inputPeerEmpty(),
	msg_id : 47,
	schedule_date : 55,
	reject_comment : 'UDQ59MFEoPVYmelG',
);
```