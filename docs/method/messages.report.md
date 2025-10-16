# messages.report

**Description** : *Report a message in a chat for violation of telegram&#039;s Terms of Service*

**Layer** : 216

```tl
messages.report#fc78af9b peer:InputPeer id:Vector<int> option:bytes message:string = ReportResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer |
| <mark>id</mark> | [`Vector<int>`](type/int) | IDs of messages to report |
| <mark>option</mark> | [`bytes`](type/bytes) | Menu option, intially empty |
| <mark>message</mark> | [`string`](type/string) | Comment for report moderation |

---

## Result

[ReportResult](type/ReportResult)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **OPTION_INVALID** | `400` | Invalid option selected |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$reportResult = $client->messages->report(
	peer : $client->inputPeerEmpty(),
	id : array(23),
	option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	message : 'VUQ6GxuOc9ewDFkz',
);
```