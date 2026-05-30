# phone.deleteGroupCallParticipantMessages

**Layer** : 225

```tl
phone.deleteGroupCallParticipantMessages#1dbfeca0 flags:# report_spam:flags.0?true call:InputGroupCall participant:InputPeer = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **report_spam** | [`flags.0?true`](type/true) | NOTHING |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>participant</mark> | [`InputPeer`](type/InputPeer) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->phone->deleteGroupCallParticipantMessages(
	report_spam : true,
	call : $client->inputGroupCall(
		id : 1757157544510721587,
		access_hash : 8373840054087148784,
	),
	participant : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```