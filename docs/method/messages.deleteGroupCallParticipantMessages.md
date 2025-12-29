# messages.deleteGroupCallParticipantMessages

**Layer** : 218

```tl
messages.deleteGroupCallParticipantMessages#1dbfeca0 flags:# report_spam:flags.0?true call:InputGroupCall participant:InputPeer = Updates;
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
$updates = $client->messages->deleteGroupCallParticipantMessages(
	report_spam : true,
	call : $client->inputGroupCall(
		id : -6874072499783630247,
		access_hash : 7946175935633748962,
	),
	participant : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```