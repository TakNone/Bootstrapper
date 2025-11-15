# messages.deleteGroupCallParticipantMessages

**Layer** : 218

```tl
messages.deleteGroupCallParticipantMessages#1dbfeca0 flags:# report_spam:flags.0?true call:InputGroupCall participant:InputPeer = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **report_spam** | [`flags.0?true`](type/true) | NOTHING |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>participant</mark> | [`InputPeer`](type/InputPeer) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->deleteGroupCallParticipantMessages(
	report_spam : true,
	call : $client->inputGroupCall(
		id : 6492194981746703268,
		access_hash : 9106090314094889653,
	),
	participant : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```