# messages.report

**Description** : *Report a message in a chat for violation of telegram's Terms of Service*

**Layer** : 211

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
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$reportResult = $client->messages->report(
	peer : $client->inputPeerEmpty(),
	id : array(89),
	option : '???LiveProto?7??@',
	message : 'LMngZ6Wi2DwBUt54',
);
```