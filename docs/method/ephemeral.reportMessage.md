# ephemeral.reportMessage

**Layer** : 233

```tl
ephemeral.reportMessage#8704f2bf peer:InputPeer id:int option:bytes message:string = ReportResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>id</mark> | [`int`](type/int) | NOTHING |
| <mark>option</mark> | [`bytes`](type/bytes) | NOTHING |
| <mark>message</mark> | [`string`](type/string) | NOTHING |

---

## Result

[ReportResult](type/ReportResult)

---

## Example

```php
$reportResult = $client->ephemeral->reportMessage(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	id : 92,
	option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	message : 'QZhaLY0l7IyigvKm',
);
```