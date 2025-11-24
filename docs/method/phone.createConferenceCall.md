# phone.createConferenceCall

**Description** : *Create and optionally join a new conference call*

**Layer** : 218

```tl
phone.createConferenceCall#7d0444bb flags:# muted:flags.0?true video_stopped:flags.2?true join:flags.3?true random_id:int public_key:flags.3?int256 block:flags.3?bytes params:flags.3?DataJSON = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **muted** | [`flags.0?true`](type/true) | If set, mute our microphone when joining the call (can only be used if join is set) |
| **video_stopped** | [`flags.2?true`](type/true) | If set, our video stream is disabled (can only be used if join is set) |
| **join** | [`flags.3?true`](type/true) | If set, also join the call, otherwise just create the call link |
| <mark>random_id</mark> | [`int`](type/int) | Unique client message ID required to prevent creation of duplicate group calls |
| **public_key** | [`flags.3?int256`](type/int256) | Public key (can only be used if join is set) |
| **block** | [`flags.3?bytes`](type/bytes) | Initial blockchain block (can only be used if join is set) |
| **params** | [`flags.3?DataJSON`](type/DataJSON) | Parameters from tgcalls (can only be used if join is set) |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->phone->createConferenceCall(
	muted : true,
	video_stopped : true,
	join : true,
	random_id : 9,
	public_key : '79910178739977641311947832938175904733245410935807808162997472547706713894285',
	block : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	params : $client->dataJSON(
		data : 'sTxL2HrUdl1Dvmap',
	),
);
```