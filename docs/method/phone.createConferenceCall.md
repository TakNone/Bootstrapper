# phone.createConferenceCall

**Layer** : 216

```tl
phone.createConferenceCall#7d0444bb flags:# muted:flags.0?true video_stopped:flags.2?true join:flags.3?true random_id:int public_key:flags.3?int256 block:flags.3?bytes params:flags.3?DataJSON = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **muted** | [`flags.0?true`](type/true) | NOTHING |
| **video_stopped** | [`flags.2?true`](type/true) | NOTHING |
| **join** | [`flags.3?true`](type/true) | NOTHING |
| <mark>random_id</mark> | [`int`](type/int) | NOTHING |
| **public_key** | [`flags.3?int256`](type/int256) | NOTHING |
| **block** | [`flags.3?bytes`](type/bytes) | NOTHING |
| **params** | [`flags.3?DataJSON`](type/DataJSON) | NOTHING |

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
	random_id : 28,
	public_key : '40901453366399438175824050972219867509736078129504845257736233934860327230920',
	block : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	params : $client->dataJSON(
		data : 'a3V84QyNHmh6cSvj',
	),
);
```